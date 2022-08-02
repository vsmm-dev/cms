@extends('connect.master')
@section('title', trans('Sign Up'))
@section('content')
    <div class="box box-register shadow">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/logo4.png') }}" alt="">
            </a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/register']) !!}
            <label for="name">{{ __('Name') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <label for="lastname">{{ __('Last Name') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-user-tag"></i>
                </span>
                {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            </div>
            <label for="email">{{ __('Email') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-at"></i>
                </span>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <label for="password" class="">{{ __('Password') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-key"></i>
                </span>
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <label for="cpassword" class="">{{ __('Confirm Password') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-key"></i>
                </span>
                {!! Form::password('cpassword', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit(trans('Register'), ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
        <div class="footer mtop16">
            <a href="{{ url('/login') }}">{{ __("Sign In") }}</a>
        </div>
    </div>
@stop
