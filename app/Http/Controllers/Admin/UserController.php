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
        return view('admin.user.index');
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


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(UserRequest $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
