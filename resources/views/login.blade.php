@extends('layouts.app')
@section('con')
<form action='/l' method='post' >
    @csrf
<center><h1>LOGIN</H1></center>
    <center>UName<input type="text" name="uname"></center>
   <center> Password<input type="password" name="upass"></center>
    <center><input type="submit" value="login"></center>
   <h3> <center><marquee>{{$er}}</marquee></center></h3>
</form>
@endsection