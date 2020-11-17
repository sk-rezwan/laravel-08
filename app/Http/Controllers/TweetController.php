<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function tweet(){
        return view('welcome');
    }

    public function showForm(){
        return view('create');
    }
    public function processForm(Request $request){
        //echo "<h1>Form Submitted</h1>";

        $body = $request->input('body');

        $tweet = Tweet::create([
            'body'=> $body
        ]);

        dd($tweet);
    }
    
} 