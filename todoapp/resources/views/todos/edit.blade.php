@extends('layouts.app')

@section('content')
<h1>Create Todo</h1>
<form action="{{route('todo.update',$todo->id)}}" method="POST" >
<div class="form-group" >
            {{ csrf_field() }}
            {{method_field('PUT')}}

      <label for="Name">Name</label>
      <input type="text" class="form-control" id="" value="{{$todo->text}}" name="text">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
    <textarea class="form-control" rows="3" name="body">{{$todo->body}}</textarea>      
    </div>
    <div class="form-group">
        <label for="Name">Due</label>
    <input type="text" class="form-control" id="" value="{{$todo->due}}" name="due">
      </div>
    <button type="submit" class="btn btn-default">Edit</button>
  </form>
@endsection