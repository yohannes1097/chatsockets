<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Chat;

class ChatController extends Controller
{
    public function getChat(){
        $chats = DB::table('chats')->join('users', 'chats.id_pengirim', '=', 'users.id')->get();
        echo json_encode($chats);
    }

    public function postChat($id, Request $Pesan){ 
        $user = Auth::user();
        $chat = new Chat;
        $chat->id_room = $id;
        $chat->id_pengirim = $user->id;
        $chat->pesan = $Pesan->message;
        $chat->save();

        $message = '{"message":"'.$Pesan->message.'"}';
        $json = json_encode($message);
        // broadcast(new NewMessage($json));
        echo 'sukses';
    }
}
