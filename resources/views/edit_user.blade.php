@extends('layouts.master')


@section('content')


<form action="{{ route('users.update',['user'=>$user->id]) }}" method="post">
@csrf
<input name="_method" type="hidden" value="PUT">
<input type="text" name="username" value="{{$user->username}}">
<input type="text" name="useremail"value="{{$user->useremail}}">
<input type="submit" name="edit">


</form>

@endsection