<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class TaskController extends Controller
{
    
    public function Completed($id){
        $task = Task::find($id);

        $project = $task->project;

        if($task->completed == true){
            $task->completed = false;
        }
        else{
            $task->completed = true;
        }

        
        $task->save();

        return redirect('/project/'. $project);
    }

    public function Index(Project $project){
        return view('newTask', [
            'project' => $project
        ]);
    }

    public function Create(Request $request){
        $project = $request->project;
        $task = new Task;
        $task->name = $request->name;
        $task->project = $project;
        $task->save();
        return redirect('project/'. $project);
    }

    public function Destroy(Task $task){
        $project = $task->project;       
        $task->delete();
        return redirect('project/' . $project);
    }

}
