<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            $message = 'Tọa mới thành công';
        } else {
            $message = 'Có lỗi xảy ra';
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
        return view('users.edit')->with(['user'=> $user, 'edit' => $edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
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
            $message = 'Chỉnh sửa thành công';
        } else {
            $message = 'Có lỗi xảy ra';
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
        //
    }

    public function search($name)
    {
        // return 'dfdf';
        // return $name;
        return $this->user->select('name','id')->where('name', 'like', '%' . $name . '%' )->get();
    }
}
