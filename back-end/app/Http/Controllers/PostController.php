<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Factories\DatabaseFactory;
use Illuminate\Factories\EmailFactory;

class PostController extends Controller

{
    private $email;
    private $database;

    public function savePost(Request $req) 
    {
        $connection = DatabaseFactory::getConnection($req->db_connection);
        $connection->table($req->db)->insert([ 'email' => $req->email]);
    }

    public function email(Request $req){

        EmailFactory::sendEmail($req->email, 'Welcome', '<p>Hi John</p>');
    }
}
