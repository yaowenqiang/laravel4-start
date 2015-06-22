@extends('layout.default')
@section('content')
<p>{{ $user->email }} </p>
<p>Phone Number:{{ $user->phone->phone }} </p>
<p>{{ $user->password }} </p>
@foreach($user->categories as $category)
<p>
{{ $category->name }}
</p>
@endforeach

@foreach($user->posts as $post)
<p>
{{ $post->title }}
</p>
@endforeach
@stop
