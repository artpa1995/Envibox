<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller

{
    //

    private $email;
    private $database;

    public function savePost(Request $req) 
    {
        $this->email = $req->email;
        $this->database = $req->database;
    }

    public function create(){

        $database = $this->database;
        DB::table($database)->insert([
            'email' => $this->email,
        ]);
    }
}
