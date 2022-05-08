@extends('layouts.app')
@section('con')
<style>
    table,th,td
    {
        border:10px solid rgb(37, 31, 31);
    }
    </style>
<table>
    <tr>
        <th>
            Username
        </th>
        <th>
            Password
        </th>
    </tr>
    @foreach($user as $u)
<tr>
    <td>
        {{$u->username}}
    </td>
    <td>
        {{$u->password}}
    </td>
    <td>
        <button><a href="/edit/{{$u->id}}">Edit</button></a>
    </td>
    <td>
        <button><a href="/del/{{$u->id}}">Delete</button></a>
    </td>

</tr>
@endforeach
</table>


@endsection