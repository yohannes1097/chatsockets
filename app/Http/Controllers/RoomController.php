<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Chat;

class RoomController extends Controller
{
    public function index(){
        $user = Auth::user();
        $rooms = DB::table('room_members')->join('rooms', 'room_members.id_room', '=', 'rooms.id')->where('room_members.id_member', $user->id)->get();
        return view('rooms', ['rooms' => $rooms]);
    }

    public function room($id){ 
        $user = Auth::user();
        $room = DB::table('rooms')->join('users', 'rooms.id_creator', '=', 'users.id')->where('rooms.id', $id)->first();
        return view('room', ['room' => $room, 'user'=>$user]);
    }
}
