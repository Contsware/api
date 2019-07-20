<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactsController extends Controller
{
    //
    public function create(Request $request){
        $contact = new Contact();
        $contact->title = $request->get('title');
        $contact->first_name = $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->address = $request->get('address');
        $contact->user_id = $request->get('user_id');
        $contact->save();
        return response()->json(['message' =>"Guardado correctamente"], 200);
    }
    public function read(Request $request){
        $contacts = Contact::where('user_id', $request->get('id'))->get();
        return response()->json($contacts, 200);
    }

    public function update(Request $request){
        $contact = Contact::findOrFail($request->get('id'));
        $contact->title = $request->get('title');
        $contact->first_name = $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->address = $request->get('address');
        $contact->update();
        return response()->json(['message' =>"updated"], 200);
    }

    public function delete(Request $request){
        $contact = Contact::findOrFail($request->get('id'))->delete();

        return response()->json(['message' =>"eliminado"], 200);
    }
}
