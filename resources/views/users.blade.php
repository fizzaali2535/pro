@extends('layouts.master')

@section('content')
<a href="{{route('users.create')}}">ADD USERS</a>

    <table border='1' cellpadding='10' cellspacing='0 '>
    <thead> 
        <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        </tr>
        </thead>
    <tbody>   
    @if(count($users))
    @foreach($users as $user )
        <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->useremail}}</td>
        <td>
        <a href="{{route('users.edit' , ['user'=>$user->id])}}"> edit </a>

        <form action="{{ route('users.destroy',['user'=>$user->id]) }}" method="post">
        @csrf
        <input name="_method" type='hidden' value="delete">
        <input type="submit" value="delete">
        </form>
        </td>
        </tr>
   
        @endforeach
@else
<tr>
<td colspan="4">No data found</td>

</tr>
@endif
</tbody>
</table>
@endsection

        
        
    
    
    