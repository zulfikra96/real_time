<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatGroup;
use Auth;
class ChatGroupController extends Controller
{
    public function getView()
    {
        $chat = ChatGroup::all();
        return view('chat_group.index',[
            'chat' => $chat
        ]);
    }

    public function ajax()
    {
           // ini_set('max_execution_time', 300);
            // while(ChatGroup::where('check',0)->count() < 1)
            // {
            //     usleep(1000);        
            // }
            if(ChatGroup::where('check',0)->count() > 0)
                {
                    $data = ChatGroup::where('check',0)->first();
                    $id   = $data->id;
                    $edit = ChatGroup::find($id);
                    $edit->check = 1;
                    $date = $edit->created_at->diffForHumans();
                    $edit->save();
                 
                    return response()->json([
                            'data' => $data
                    ]);
                }           
            
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->chatGroups()->create([
            'message' => $request->message,
            'username' => Auth::user()->username,
            'check' => 0
        ]);
        $date  = ChatGroup::orderBy('created_at','desc')->first();
        return response()->json([
            'info' => 'berhasil',
            'date' => date('h:m A',$date->created_at),
            'message' => request()->get('message')
        ]);
    }
}
