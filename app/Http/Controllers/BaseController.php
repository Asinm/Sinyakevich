<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function getIndex($id=null)
    {
        //dd($this->metas);
        return view('templates.index')->with('id', $id);
    }
}
