<?php

namespace App\Http\Controllers;

use App\Models\College_Inist;
use App\Models\Lecture;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $college= College_Inist::limit(10)->get();
        $lectures= Lecture::distinct()->limit(10)->get(['name']);

        return view('index', compact('college', 'lectures'));
    }
}
