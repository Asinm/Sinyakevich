@extends('base')
@section('styles')
    @parent
    <link href="{{asset("/media/css/style2.css")}}" rel="stylesheet" type="text/css">
@stop
@section('content')

    <div id="news">
        <h2>ALL NEWS </h2>
        @foreach($text as $one)
            <a href="{{asset($one->url)}}">
            {{$one->name}}
            </a>
        <hr/>
        @endforeach
        @stop
