<?php

namespace App\Http\Controllers;

use App\Models\College_Inist;
use App\Models\Deparment;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=[
            ['name' => 'بەکارهێنەر', 'icon' => 'bi bi-person', 'count' => User::count()],
            ['name' => 'کۆلێجەکان/پەیمانگاکان', 'icon' => 'bi bi-building', 'count' => College_Inist::count()],
            ['name' => 'بەشەکان', 'icon' => 'bi bi-building', 'count' => Deparment::count()],
        ];
        return view('admin.home', compact('data'));
    }
}
