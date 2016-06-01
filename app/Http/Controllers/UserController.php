<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{   
    public function index(){
        $users = User::all();
        return view("users.index")->with('users', $users);
    }



    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('backend/users');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }
    public function update($id, Request $request){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password !== ""){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('backend/users');
    }
}
