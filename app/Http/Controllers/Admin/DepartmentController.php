<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Models\College_Inist;
use App\Models\Deparment;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $data= Deparment::latest()->paginate(10);
        return view('admin.department.index', compact('data'));
    }

    public function create()
    {
        $colleges= College_Inist::all();
        return view('admin.department.form', compact('colleges'));
    }


    public function store(DepartmentRequest $request)
    {
        College_Inist::findOrFail($request->college_id);
        Deparment::create($request->all());

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی دروستکرا'
        ]);
    }


    public function edit($id)
    {
        $data= Deparment::findOrFail($id);
        $colleges= College_Inist::all();
        return view('admin.department.form', compact('data', 'colleges'));
    }


    public function update(DepartmentRequest $request, $id)
    {
        College_Inist::findOrFail($request->college_id);
        $data= Deparment::findOrFail($id)->update($request->all());

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی تازەکرایەوە'
        ]);
    }


    public function destroy($id)
    {
        Deparment::findOrFail($id)->delete();

        return redirect()->back();
    }
}
