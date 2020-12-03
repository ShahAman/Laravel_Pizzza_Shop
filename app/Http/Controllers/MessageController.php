<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client_messages;

class MessageController extends Controller
{
    public function display(){
        $messages = Client_messages::paginate(5);
        return view('messages',compact('messages'));
    }
}
