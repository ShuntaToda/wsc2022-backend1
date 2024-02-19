<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("home");
    }

    public function admin_users(){
        $admins = User::where("role", "admin")->get();
        return view("admin-users", compact("admins"));
    }
    
    public function users(){
        $users = User::where("role", "user")->get();
        return view("users", compact("users"));
    }
    public function show_user(Request $request, $name){
        $user = User::where("name", $name)->first();
        return view("edit-user", compact("user"));
    }

    public function edit_user(Request $request, $name){
        $user = User::where("name", $name)->first();

        // dd($request->block == null ? false : true);
        $user->update([
            "block" => $request->block == null ? 0 : 1
        ]);
        return redirect()->route("admin.edit-admin-user", compact("name"));
    }
    public function games(){
        $games = Game::get();
        return view("games", compact("games"));
    }

    
    public function show_game($title){
        $game = User::where("title", $title)->first();
        return view("edit-game", compact("game"));
    }


}
