<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    
    public function Index(){
        return view('newProject');
    }

    public function Create(Request $request){
        $nproject = new Project;
        $nproject->name = $request->name;
        $nproject->description = $request->description;
        $nproject->image = $request->image;
        $nproject->color = $request->color;
        $nproject->public = false;
        $nproject->simage = $request->simage;
        $nproject->font_color = $request->fcolor;
        $nproject->user = 1;
        $nproject->save();

        return redirect('/');
    }

    public function Show(Project $project){
        return view('Project', [
            'project' => $project
        ] );
    }

    public function Destroy(Project $project){
        $project->delete();
        return redirect('/');
    }

    public function Edit(Project $project){
        return view('editProject', [
            'project' => $project
        ]);
    }

    public function Patch(Project $project, Request $request){
        $project->name = $request->name;
        $project->description = $request->description;
        $project->image = $request->image;
        $project->color = $request->color;
        $project->simage = $request->simage;
        $project->font_color = $request->fcolor;
        $project->save();
        return redirect('/project/'. $project->id);
    }

    public function Favorite(Project $project){
        if($project->favorite == false)
            $project->favorite =  true;
        else
            $project->favorite =  false;
        $project->save();
        return redirect('/');
    }

}
