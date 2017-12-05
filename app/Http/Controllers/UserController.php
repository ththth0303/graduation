<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\SelectOption;
use Auth;

class UserController extends Controller
{
    public function __construct(User $user, SelectOption $selectOption)
    {
        $this->user = $user;
        $this->selectOption = $selectOption;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->with('degree')->paginate(10);
        // dd($users);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create')->with('degrees', $this->selectOption->getByType('degree'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        if ($request->hasFile('avatar')) {
            $request->avatar->store(config('path.avatar'));
            $data['avatar'] = $request->avatar->hashName();
        }
        if (User::create($data)) {
            $message['message'] = 'Tạo mới thành công';
            $message['type'] = true;
        } else {
            $message['message'] = 'Có lỗi xảy ra, tạo mới không thành công';
            $message['type'] = false;
        }
        return redirect(route('user.index'))->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.profile')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $edit = '';
        // if (Auth::user()->level == config('permission.admin')) {
        //     $edit = 'disabled';
        // }
        $degrees = $this->selectOption->getByType('degree');
        return view('users.edit')->with(['user' => $user, 'edit' => $edit, 'degrees' => $degrees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->all();
        if ($request->hasFile('avatar')) {
            $request->avatar->store(config('path.avatar'));
            $data['avatar'] = $request->avatar->hashName();
            if ($user->avatar && file_exists(config('path.avatar').$user->avatar)) {
                unlink(config('path.avatar').$user->avatar);
            }
        }
        if ($user->update($data)) {
            $message['message'] = 'Chỉnh sửa thành công';
            $message['type'] = true;
        } else {
            $message['message'] = trans('message.fail');
            $message['type'] = false;
        }
        return redirect(route('user.index'))->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->user->destroy($id);
            $message = "Xóa thành công";
        } catch (\Exception $e) {
            $message = "Có lỗi xảy ra";
        }

        return redirect(route('user.index'))->with('message', $message);
    }

    public function search($name, $type = null)
    {
        // return 'dfdf';
        // return $name;
        $users = $this->user->select('name','id')->where('name', 'like', '%' . $name . '%' )->get();

        if ($type == 'page') {
            return view('users.index')->with('users', $users);
        }

        return $users;
    }
}
