<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatPrivateController extends Controller
{
    public function getView()
    {
        return view('chat_private.index');
    }
}
