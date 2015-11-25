@extends('base')

    @section('styles')
        @parent
        <link href="/media/bootstrap/css/bootstrap.min.css" rel="stylesheet">
@section('content')
@include('templates\errors')
    <form method="POST" action={{asset('auth/register')}}> {!! csrf_field() !!}
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input name="name" type="text" class="form-group" id="exampleInputEmail1" placeholder="Enter Login">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input name="email" type="email" class="form-group" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"></label>
            <input name="password" type="password" class="form-group" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"></label>
            <input name="password_confirmation" type="password" class="form-group" id="exampleInputPassword1"
                   placeholder="Repeat Password">
        </div>

        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
@stop