@extends('layouts.app')

@section('title', 'Blog Potss')

@section('content')

@foreach ($posts as $key => $post )

    <div> <h1> {{ $key }}. {{ $post['title'] }} </h1> </div>
    
@endforeach

@endsection