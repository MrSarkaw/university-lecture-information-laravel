<?php

namespace App\Http\Controllers;

use App\Models\College_Inist;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $college= College_Inist::limit(10)->get();
        
        return view('index', compact('college'));
    }
}
