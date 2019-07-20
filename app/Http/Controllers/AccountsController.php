<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
class AccountsController extends Controller
{
    //
    public function create(Request $request){
        $account = new Account();
        $account->name = $request->get('name');
        $account->username = $request->get('username');
        $account->password = $request->get('password');
        $account->activity_id = $request->get('activity_id');
        $account->save();
        return response()->json(['message' =>"Guardado correctamente"], 200);
    }
    public function read(Request $request){
        $accounts = Account::where('activity_id', $request->get('id'))->get();
        return response()->json($accounts, 200);
    }

    public function update(Request $request){
        $account = Account::findOrFail($request->get('id'));
        $account->name = $request->get('name');
        $account->username = $request->get('username');
        $account->password = $request->get('password');
        $account->update();
        return response()->json(['message' =>"actualizado"], 200);
    }

    public function delete(Request $request){
        Account::findOrFail($request->get('id'))->delete();

        return response()->json(['message' =>"eliminado"], 200);
    }
}
