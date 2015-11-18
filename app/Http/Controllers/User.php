<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class User extends Controller
{
    public function getIndex($id=null){
        return 'user ' .$id;
    }
    public function getUrl($id=null){
     return $id;
    }
}
