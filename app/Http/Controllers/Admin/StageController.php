<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StageRequest;
use App\Models\Deparment;
use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index(Request $request)
    {
        Deparment::findOrFail($request->dep_id);
        $data= Stage::latest()->where('dep_id', $request->dep_id)->paginate(10);
        return view('admin.department.stage.index', compact('data'));
    }

    public function create()
    {
        return view('admin.department.stage.form');
    }


    public function store(StageRequest $request)
    {
        Deparment::findOrFail($request->dep_id);
        Stage::create($request->all());

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی دروستکرا'
        ]);
    }


    public function edit($id)
    {
        $data= Stage::findOrFail($id);
        return view('admin.department.stage.form', compact('data'));
    }


    public function update(StageRequest $request, $id)
    {
        Deparment::findOrFail($request->dep_id);
        $data= Stage::findOrFail($id)->update($request->all());

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی تازەکرایەوە'
        ]);
    }


    public function destroy($id)
    {
        Stage::findOrFail($id)->delete();

        return redirect()->back();
    }
}
