@extends('layouts.app')

@section('title-block')
    Contact page
@endsection

@section('content')
    <h1>Contact page</h1>


    <form action="{{route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter a name</label>
            <input type="text" name="name" placeholder="Enter a name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Enter a email</label>
            <input type="text" name="email" placeholder="Enter a email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="topic">Enter a topic</label>
            <input type="text" name="topic" placeholder="Enter a topic" id="topic" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Enter a message</label>
            <textarea name="message"  id="messsage" class="form-control" placeholder="Enter a message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
