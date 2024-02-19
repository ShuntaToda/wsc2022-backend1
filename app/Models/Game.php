<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "description",
        "thumbnail",
        "deleted",
        "user_id",
    ];

    public function getAuther($id){
        $user = User::find($id);
        return $user;
    }
    public function getVersions($id){
        $versions = Version::where("game_id", $id)->get();
        return $versions;
    }
}
