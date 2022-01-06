<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



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
        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }
    public function redirect(){
        $role_id=Auth::user()->role_id;

        if($role_id=='1'){

            // $categories=Category::all();
            return view('publicSite.index');

        }else{
            // $categories=Category::all();
            return view('publicSite.index');
        }
    }

}
