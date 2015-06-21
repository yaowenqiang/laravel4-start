@extends('layout.default')
@section('content')
    {{-- '<script>alert("hello world");</script>' --}}
    {{-- 会对输出进行转义--}}
    {{{ '<script>alert("hello world");</script>' }}}
    <br>
@if(count($users))
    @foreach($users as $user)
        <p>{{ $user->email }}</p>
        <p>{{ $user->password or "no password" }}</p>
    @endforeach
@endif
@stop
