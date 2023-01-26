<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CollegeRequest;
use App\Models\College_Inist;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $data= College_Inist::latest()->paginate(10);
        return view('admin.college.index', compact('data'));
    }

    public function create()
    {
        return view('admin.college.form');
    }


    public function store(CollegeRequest $request)
    {
       $file= $request->file('img');

       $name=$file->hashName();
       $file->move('img', $name);
       $request->merge(['image' => $name]);

       College_Inist::create($request->all());
       return redirect()->back()->with([
        'message' => 'بەسەرکەوتووی دروستکرا'
       ]);
    }


    public function edit($id)
    {
        $data= College_Inist::findOrFail($id);
        return view('admin.college.form', compact('data'));
    }


    public function update(CollegeRequest $request, $id)
    {
        $data= College_Inist::findOrFail($id);

        $name= $data->image;

        if($request->img){
            $file= $request->file('img');

            $name=$file->hashName();
            $file->move('img', $name);
        }
        $request->merge(['image' => $name]);

        $data->update($request->all());
     
        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی تازەکرایەوە'
        ]);
    }


    public function destroy($id)
    {
        College_Inist::findOrFail($id)->delete();

        return redirect()->back();
    }
}
