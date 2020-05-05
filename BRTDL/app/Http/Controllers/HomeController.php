<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::guest())
        
            return view('index');

        else{
            return view('index', [
                'user' => User::where('id', Auth::id())->get()->first()
            ]);
        }
    }

    public function home(){
        

        if(Auth::guest())
        
            return view('index');

        else{
            return view('index', [
                'user' => User::where('id', Auth::id())->get()->first()
            ]);
        }
    }

    public function news(){
        return view('news');
    } 

    
}
