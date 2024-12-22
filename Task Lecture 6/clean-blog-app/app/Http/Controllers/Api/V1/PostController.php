<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    public function index(){
        // dd("Hamada From API Documentation");
        return $this->apiResponse(Post::paginate());
        //return response()->json(['data'=> Post::paginate()]);
    }
    
    public function show(Post $post){
        return $this->apiResponse($post);
        //return response()->json(["data" => $post]);
    }
}
   