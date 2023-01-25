<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $data= User::latest()->paginate(10);
        return view('admin.user.index', compact('data'));
    }

    public function create()
    {
        return view('admin.user.form');
    }


    public function store(UserRequest $request)
    {
       User::create($request->all());
       return redirect()->back()->with([
        'message' => 'بەسەرکەوتووی دروستکرا'
       ]);
    }


    public function edit($id)
    {
        $data= User::findOrFail($id);
        return view('admin.user.form', compact('data'));
    }


    public function update(UserRequest $request, $id)
    {
        $data= User::findOrFail($id);

        if($request->password){
            $data->update($request->all());
        }else{
            $data->update($request->only('email'));
        }

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی تازەکرایەوە'
        ]);
    }


    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->back();
    }
}
