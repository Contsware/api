<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    //
    public function create(Request $request){
        $project = new Project();
        $project->name = $request->get('name');
        $project->methodology = $request->get('methodology');
        $project->user_id = $request->get('user_id');
        $project->save();
        return response()->json(['message'=>'Created'],200);
    }

    public function read(Request $request){
        $projects = Project::where('user_id', $request->get('id'))->get();
        return response()->json($projects, 200);
    }

    public function update(Request $request){
        $project = Project::findOrFail($request->get('id'));
        $project->name = $request->get('name');
        $project->methodology = $request->get('methodology');
        $project->update();
        return response()->json(['message' =>"updated"], 200);
    }

    public function delete(Request $request) {
        $project = Project::findOrFail($request->get('id'))->delete();

        return response()->json(['message' =>"deleted"], 200);
    }
}
