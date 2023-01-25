<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

class ChatController extends Controller
{
    public function Main(){

        return view('chat');
    }

    public function all_message(){
        return Message::with('user')->get();
    }

    public function store_message(Request $request){
        $user = Auth::user();
        $message =  $user->messages()->create([
            'text' => $request->text
        ]);

        \broadcast(new SendMessage( $user, $message  ))->toOthers();
//        event(new SendMessage( $user, $message  ));
        return 'sent';
    }



}
