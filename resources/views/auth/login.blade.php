@extends('base')

@section('styles')
    @parent
    <link href="/media/bootstrap/css/bootstrap.min.css" rel="stylesheet">
@section('content')
    @include('templates\errors')
    <form method="POST" action={{asset('auth/login')}}> {!! csrf_field() !!}
                <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-group" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-group" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Отправить</button>

    </form>
@stop