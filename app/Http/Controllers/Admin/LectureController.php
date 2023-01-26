<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LectureRequest;
use App\Models\Lecture;
use App\Models\Stage;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function index(Request $request)
    {
        Stage::findOrFail($request->stage_id);
        $data= Lecture::latest()->where('stage_id', $request->stage_id)->paginate(10);
        return view('admin.department.stage.lecture.index', compact('data'));
    }

    public function create()
    {
        return view('admin.department.stage.lecture.form');
    }


    public function store(LectureRequest $request)
    {
        Stage::findOrFail($request->stage_id);
        Lecture::create($request->all());

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی دروستکرا'
        ]);
    }


    public function edit($id)
    {
        $data= Lecture::findOrFail($id);
        return view('admin.department.stage.lecture.form', compact('data'));
    }


    public function update(LectureRequest $request, $id)
    {
        Stage::findOrFail($request->stage_id);
        $data= Lecture::findOrFail($id)->update($request->all());

        return redirect()->back()->with([
            'message' => 'بەسەرکەوتووی تازەکرایەوە'
        ]);
    }


    public function destroy($id)
    {
        Lecture::findOrFail($id)->delete();

        return redirect()->back();
    }
}
