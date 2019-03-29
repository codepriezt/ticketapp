<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public function index(){
        return view('page.index');

    }
    public function register(){
        return view('page.register');
    }

    public function schedules(){
        $readpost = DB::table('posts')->get();
        //dd($readpost);
         return view('page.schedules')->with('post', $readpost);
    }
    
}
