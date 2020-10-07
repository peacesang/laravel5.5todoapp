@extends('layouts.app')
@section('content')    
<a class="btn btn-default" href="{{route('todo.index')}}">Go Back</a>
            
    <div class="well">
        <h1>{{$todo->text}}</h1>
        <div class="label label-danger">{{$todo->due}}</div>    
        <p>{{$todo->body}}</p>
    </div>      
       
@endsection