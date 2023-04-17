<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Database;

class ParentPostController extends Controller
{
    private $email;
    private $database;

    public function savePost(Request $req) 
    {
        $this->email = $req->email;
        $this->database = $req->database;
    }

}
