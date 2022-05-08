@extends('layouts.app')
@section('con')
<form action="/r" method="post">
    @csrf
    <center><h1>REGISTRATION</H1></center>
    <center>UName<input type="text" name="rname"></center>
    <center>Password<input type="password" name="rpass"></center>
    <center><input type="submit" name="rbutton" value="register"></center>


@endsection