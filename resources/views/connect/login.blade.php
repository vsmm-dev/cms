@extends('connect.master')
@section('title','Login')
@section('content')
    <div class="box">
        {!! Form::open(['url'=>'/login']) !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
        {!! Form::close() !!}
    </div>
@stop
