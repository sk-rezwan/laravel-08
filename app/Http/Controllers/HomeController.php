<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Tweet;
use Exception;

class HomeController extends Controller
{
    public function showHome(){
        $data = [];

        $data['tweets'] = Tweet::latest()->get();

        return view('home', $data);
    }

    public function storeTweet(Request $request){

        // validate

            $this->validate($request, [
                'tweet'=>"required|min:6|max:160",
                'photo'=> 'image'
            ]);
                
            $tweet = $request->input('tweet');

            
            $path = null;

            if($request->hasFile('photo')){
                $photo = $request->file('photo');
                $path = $photo->storePublicly('public/images');
            }

            // $file = $request->file('Picture');
            // $destinationPath = 'public/img/';
            // $originalFile = $file->getClientOriginalName();
            // $file->move($destinationPath, $originalFile);

        // store in db
            try{
                Tweet::create([
                    'user_id'=> 1,
                    'tweet'=> $tweet,
                    'media'=> $path
                ]);

                session()->flash('message','Tweet posted');

            } catch(Exception $e){

                session()->flash('error','Something went wrong!!');
            }
        return back();
    }
}
