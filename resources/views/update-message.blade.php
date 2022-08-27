@extends('layouts.app')

@section('title-block')
    Edit entry
@endsection

@section('content')
    <h1>Edit entry</h1>


    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter a name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Enter a name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Enter a email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Enter a email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="topic">Enter a topic</label>
            <input type="text" name="topic" value="{{$data->topic}}" placeholder="Enter a topic" id="topic" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter a message</label>
            <textarea name="message"  id="messsage"  class="form-control" placeholder="Enter a message">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
