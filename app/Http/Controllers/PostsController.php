<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use db;
use App\User;
use Validator; 
class PostsController extends Controller
{
    
    public function postregister(Request $request){
         $data = $request->all();

        
         $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required' 
            
        ]);
   
        

         if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data['password'] = bcrypt($data['password']);
         User::create($data);
        // return back();

         return redirect('/');

    }
   


    public function postlogin(Request $request){
        $data = $request->all();
        
        return redirect ('/schedules');
         

    }
}