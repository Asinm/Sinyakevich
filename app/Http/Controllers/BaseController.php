<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Maintext;
class BaseController extends Controller
{
    public function getCreate(){
        $text=new Maintext();
        $text->name='Contacts';
        $text->body='Description';
        $text->url='Contacts1';
        $text->save();
        return redirect('/');
    }
    public function getAll(){
        $text=Maintext::all();
        return view('templates.all')->with('text', $text);
    }
    public function getUpdate($id=null){
        $text=Maintext::find($id);
        $text->name='Всем привет!!!!!!!!';
        $text->body='Урррааааааааааа';
        $text->url='Блаблаблаблабла';
        $text->save();
        return redirect('/');
    }
    public function getDelete($id=null){
        $text=Maintext::find($id);
       $text->delete();
        return redirect('/');
    }
    public function getIndex($id=null)
    {
        //dd($this->metas);
        $text=Maintext::find($id);
        $text=Maintext::where('url', '=', $id)->first();
        //dd($text);

        return view('templates.index')->with('text', $text);
    }
}
