@extends('layouts.app')
@section('content')    
<a class="btn btn-default" href="{{route('todo.index')}}">Go Back</a>
            
    <div class="well">
        <h1>{{$todo->text}}</h1>
        <div class="label label-danger">{{$todo->due}}</div>   
        <hr> 
        <p>{{$todo->body}}</p>
    </div>    
    <br><br>
    {{-- <a  href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a> --}}
    <a  href="{{route('todo.edit',$todo->id)}}" class="btn btn-default">Edit</a>

    <form action="{{route('todo.destroy',$todo->id)}}" method='POST' >
    <div class="form-group" >
        {{ csrf_field() }}
        {{method_field('DELETE')}}
   {{-- {{csrf_token}} --}}
         
<button type="submit" class="btn btn-default">Delete</button>
</form>
       
@endsection