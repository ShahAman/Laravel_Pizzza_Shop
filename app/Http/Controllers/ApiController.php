<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request, Client_messages $cm){
        $bodyContent = $request->getContent();
        $cm->api($request, $cm);
        return gettype($bodyContent);
    }
}
