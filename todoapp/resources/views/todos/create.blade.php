@extends('layouts.app')

@section('content')
<h1>Create Todo</h1>
<form action="{{route('todo.store')}}" method="POST" >
<div class="form-group" >
            {{ csrf_field() }}
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="" placeholder="Jane Doe" name="text">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" rows="3" name="body"></textarea>      
    </div>
    <div class="form-group">
        <label for="Name">Due</label>
        <input type="text" class="form-control" id="" placeholder="Jane Doe" name="due">
      </div>
    <button type="submit" class="btn btn-default">Create</button>
  </form>
@endsection