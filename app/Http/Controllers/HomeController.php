<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        if(Auth::user()->hasRole('Administrator')){
            return view('dash.dashboard');
        }
        elseif(Auth::user()->hasRole('Supplier')){
            return view('dash.supplierdash');
        }
        elseif(Auth::user()->hasRole('Retailer')){
            return view('dash.supplierdash');
        }
        else
        {
            return view('dash.farmerdash');
        }

    }
}
