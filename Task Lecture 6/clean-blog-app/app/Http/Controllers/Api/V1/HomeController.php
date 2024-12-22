<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;


class HomeController extends ApiController
{
    public function index(){
        $posts = Post::with('user')->take(10)->get();
        return $this->apiResponse($posts);
        //return response()->json(['data'=> $posts]);
    }

    
    public function settings(){
        $settings = Setting::where('id',1)->first();
        return $this->apiResponse($settings);
        //return response()->json(['data'=> $settings]);
    }
}
