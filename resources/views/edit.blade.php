@extends('layouts.app')
@section('con')
<form method='post' action='/up/{{$d->id}}'>
    @csrf
<center><h1>update</H1></center>
    <center>UName<input type="text" name="uname" value="{{$d->username}}"></center>
   <center> Password<input type="password" name="upass" value="{{$d->password}}"></center>
    <center><input type="submit" value="EDIT"></center>
   
</form>
@endsection