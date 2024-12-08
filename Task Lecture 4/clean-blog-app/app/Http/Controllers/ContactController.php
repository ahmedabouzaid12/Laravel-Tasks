<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index(){
        return view('front.contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^\+?[0-9\s\-\(\)]+$/|min:9|max:20',
            'content' => 'required|string|min:10|max:1000',
        ]);
            
        
        $data = $request->all();

        // dd($data);
        $message = new Message();
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->phone = $data['phone'];
        $message->content = $data['content'];
        $message->save();
        // dd($message);

        return back()->with('success','Data inserted successfully');
    }
}
