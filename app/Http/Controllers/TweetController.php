<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function tweet(){

        $tweets = Tweet::all();

        return view('index', compact('tweets'));
    }

    public function showForm(){
        return view('create');
    }
    public function errorPage(){
        return view('error');
    }
    public function processForm(Request $request){
        //echo "<h1>Form Submitted</h1>";

        $body = $request->input('body');

        $request = Tweet::create([
            'body'=> $body
        ]);

        return redirect('tweets');
    }
    public function showProfile(int $id){
        
        $tweet = Tweet::find($id);

        
        return view('show', compact('tweet'));
       // dd($tweet);

    }

    public function deleteTweet(int $id){

        $tweet = Tweet::find($id);

        $tweet->delete();

        return redirect()->route('index.tweet');
    }

    public function editTweet(int $id, Request $request){
        
        $body = $request->input('body');

        $tweet = Tweet::find($id);
        $tweet->update([
            'body'=> $body
        ]);
        //dd($request);
        return redirect()->route('index.tweet');
    }
    
} 