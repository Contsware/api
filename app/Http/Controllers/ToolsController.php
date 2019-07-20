<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;
class ToolsController extends Controller
{
    //

    public function create(Request $request){
        $tool = new Tool();
        $tool->name = $request->get('name');
        $tool->version = $request->get('version');
        $tool->project_id = $request->get('project_id');
        $tool->save();
        return response()->json(['message'=>'Created'],200);
    }

    public function read(Request $request){
        $tools = Tool::where('project_id',$request->get('id'))->get();
        return response()->json($tools,200);
    }

    public function update(Request $request){
        $tool = Tool::findOrFail($request->get('id'));
        $tool->name = $request->get('name');
        $tool->version = $request->get('version');
        $tool->update();
        return response()->json(['message' =>"updated"], 200);
    }

    public function delete(Request $request) {
        $tool = Tool::findOrFail($request->get('id'))->delete();
        return response()->json(['message' =>"deleted"], 200);

    }
}
