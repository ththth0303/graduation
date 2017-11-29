<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Task;
use App\Attach;
use App\UserTask;
use DB;
use Auth;
use App\TaskUpdate;

class TaskController extends Controller
{
    public function __construct(Task $task, Attach $attach, UserTask $userTask, TaskUpdate $taskUpdate)
    {
        $this->task = $task;
        $this->attach = $attach;
        $this->userTask = $userTask;
        $this->taskUpdate = $taskUpdate;
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
        try {
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
        } catch (\Exception $e) {
            DB::rollback();
            return 'co loi xay ra';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $task->load(['assignee.user', 'user', 'attachs', 'taskUpdates.user']);
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

    public function updateProcess(Request $request)
    {
        // $data = $request->only(['process', 'message']);
        $task = $this->task->find($request['task_id']);


        try {
            DB::connection()->enableQueryLog();
            DB::beginTransaction();
            $this->taskUpdate->create([
                'user_id' => Auth::user()->id,
                'new_process' => $request->process,
                'old_process' => $task['process'],
                'message' => $request->message,
                'task_id' => $task['id'],
            ]);
            $task->update(['process' => $request['process']]);
            if ($request->hasFile('attach')) {
                $attach['name'] = $request->file('attach')->getClientOriginalName();
                $attach['path'] = $request->file('attach')->hashName();
                $attach['user_id'] = Auth::user()->id;
                $attach['attachtable_id'] = $request['task_id'];
                $attach['attachtable_type'] = 'tasks';
                if (Storage::disk('local')->put('attachs', $request->attach)) {
                    $this->attach->create($attach);
                }
            }

            return  DB::getQueryLog();
            DB::commit();
            // return redirect(route('task.show', $request['task_id']));
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }
}
