@extends('layout.default')
@section('content')
@foreach($posts as $post)
    <p>{{ $post->title  }} By<strong> {{ $post->user->email or ""  }}</strong></p>
@endforeach
@stop
