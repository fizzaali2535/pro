@extends('layouts.master')


@section('content')
<form action="{{ route('users.store') }}" method="POST">
@csrf
<input type="text" name="username">
<input type="text" name="useremail">
<input type="submit" name="add">


</form>

@endsection