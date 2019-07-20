<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
class ActivitiesController extends Controller
{
    //

    public function create(Request $request){
        $activity = new Activity();
        $activity->name = $request->get('name');
        $activity->description = $request->get('description');
        $activity->contact_id = $request->get('contact_id');
        $activity->save();
        return response()->json(['message' =>"Guardado correctamente"], 200);
    }
    public function read(Request $request){
        $activities = Activity::where('contact_id', $request->get('id'))->get();
        return response()->json($activities, 200);
    }

    public function update(Request $request){
        $activity = Activity::findOrFail($request->get('id'));
        $activity->name = $request->get('name');
        $activity->description = $request->get('description');
        $activity->update();
        return response()->json(['message' =>"actualizado"], 200);
    }

    public function delete(Request $request){
        Activity::findOrFail($request->get('id'))->delete();

        return response()->json(['message' =>"eliminado"], 200);
    }
}
