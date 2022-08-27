@extends('layouts.app')

@section('title-block')
    {{$data->topic}}
@endsection

@section('content')
    <h1>{{$data->topic}}</h1>
        <div class="alert alert-info">
            <p>{{ $data->name }}</p>
            <p>{{ $data->message }}</p>
            <p>{{ $data->email }}</p>
            <p><small>{{ $data->created_at }}</small></p>

            <a href="{{ route('contact-update', $data->id) }}">
                <button class="btn btn-primary">Edit</button>
            </a>

            <a href="{{ route('contact-delete', $data->id) }}">
                <button class="btn btn-danger">Delete</button>
            </a>

        </div>
@endsection


