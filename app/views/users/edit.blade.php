@extends('layout.default')
@section('content')
{{-- Form::open(['route'=>['user.update',$user->id],'class'=>'form']) --}}
{{ Form::model($user,['route'=>['user.update',$user->id],'method'=>'put']) }}
<li>
{{ Form::label('email','Your email:') }}
{{ Form::email('email') }}
</li>
<li>
{{ Form::label('password','Your password:') }}
{{ Form::password('password') }}
</li>
<li>
{{ Form::label('permission','Your permission:') }}
{{ Form::select('permission',['1'=>'Webmaster','2'=>'Editor','3'=>'Member'],2) }}
</li>
<li>
{{ Form::submit('Save') }}
</li>
{{ Form::close() }}
@stop
