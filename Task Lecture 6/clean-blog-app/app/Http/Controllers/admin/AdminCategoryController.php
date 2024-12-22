<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;

class AdminCategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        // dd($categories);
        return view('admin.pages.category.index',compact('categories'));
    }

    public function create(){
        return view('admin.pages.category.create');
    }

    public function store(CreateCategoryRequest $request){

        $data = $request->validated(); 
    
        //image logic
        $img = $request->file('image'); 
        $ext = $img->getClientOriginalExtension(); 
        $image_name = "category".rand(10000,1000000).".".$ext;
    
        $img->move(public_path('admin/assets/img/categories'), $image_name); 
        $data['image'] = $image_name; 
    
        if(Category::create($data)){
            toastr()->success('Category created successfully');
            return to_route('category.index');

        }
        // Handling failure case
    }

    // public function destroy()
    
}
