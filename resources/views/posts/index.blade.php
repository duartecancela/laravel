@extends('layouts.app')

@section('title', 'Blog Potss')

@section('content')

@forelse ($posts as $key => $post )
{{--  @break($key == 2)  --}}
{{--  @continue($key == 1)  --}}
@if($loop->even)
    <div> <h1> {{ $key }}. {{ $post['title'] }} </h1> </div>  
@else
    <div style="background-color: silver"> <h1> {{ $key }}. {{ $post['title'] }} </h1> </div>
@endif
@empty
No posts found!
@endforelse

@endsection