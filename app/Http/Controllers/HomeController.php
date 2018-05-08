<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(\Auth::user()->hasRole('admin')){
            return $this->adminDashboard();
        }
    }

    public function adminDashboard(){
        $stats = [];
        return view('admin/dashboard', compact('stats'));
    }
    
}
