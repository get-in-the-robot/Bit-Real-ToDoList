<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Project;

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
            $user = User::where('id', Auth::id())->get()->first();
            return view('index', [
                'projects' => Project::orderBy('favorite', 'desc')->latest()->get()
            ]);
        }
    }

    public function news(){
        return view('news');
    } 


    public function settings(){
        return view('Settings');
    }

    public function avatar(User $user, Request $request){
        $user->avatar = $request->avatar;
        $user->save();
        return redirect('/settings');
    }

    
}
