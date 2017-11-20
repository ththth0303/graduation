<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Task;
use App\Attach;
use App\UserTask;
use DB;
use Auth;

class TaskController extends Controller
{
    public function __construct(Task $task, Attach $attach, UserTask $userTask)
    {
        $this->task = $task;
        $this->attach = $attach;
        $this->userTask = $userTask;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->task->with(['assignee', 'user', 'attachs'])->paginate(10);
        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attach = [];
        DB::beginTransaction();
        // try {
            $data = $request->all();
            $data['user_id'] = 1;
            $task = $this->task->create($data);
            foreach ($request->user as $key => $value) {
                $this->userTask->create(['user_id' => $value, 'task_id' => $task->id]);
            }
            if ($request->hasFile('attach')) {
                $attach['name'] = $request->file('attach')->getClientOriginalName();
                $attach['path'] = $request->file('attach')->hashName();
                $attach['user_id'] = Auth::user()->id;
                $attach['attachtable_id'] = Auth::user()->id;
                $attach['attachtable_type'] = 'tasks';
                if (Storage::disk('local')->put('attachs', $request->attach)) {
                    $this->attach->create($attach);
                }
            }
            DB::commit();
            return $data;
        // } catch (\Exception $e) {
            DB::rollback();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task->load(['assignee.user', 'user', 'attachs']);
        // dd($task);
        return view('tasks.detail')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
