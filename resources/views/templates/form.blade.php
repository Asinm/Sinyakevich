@extends('base')
@section('styles')
@parent
<link href="/media/bootstrap/css/bootstrap.min.css" rel="stylesheet">
@show
@section('content')
<form>
 {!! csrf_field() !!}
 <div class="form-group">
    <label for="exampleInputName1"> Имя </label>
    <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Name">
  </div>
 
 <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword2">Повтор пароля</label>
    <input name="pass_repeat" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>  
  
   <button type="submit" class="btn btn-default"> Регистрация </button>
</form>
@endsection