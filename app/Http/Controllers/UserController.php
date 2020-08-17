<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::getUsers();
        return view('admin.list', compact('users'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(MessageRequest $request)
    {
        if($request->hasFile('avatar')) 
        {
            $file = $request->file('avatar')->getClientOriginalName();
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' .$extension;
            $path = $request -> file('avatar') -> storeAs('public/images', $fileNameToStore);
        }
        else 
        {
            $fileNameToStore = '';
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->img = $fileNameToStore;
        $user->save();
        return redirect()->route('user.create')->with('success', trans('messages.added'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.infor', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    public function update(MessageRequest $request, $id) 
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->gender = $request->get('gender');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();
        return redirect()->route('user.edit', $id)->with('success', trans('messages.updated'));
    }

    public function destroy($id) 
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', trans('messages.deleted'));
    }
}
