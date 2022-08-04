@extends('connect.master')
@section('title', trans('Sign In'))
@section('content')
    <div class="box box-login shadow">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/logo4.png') }}" alt="">
            </a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/login']) !!}
            <label for="email">{{ __('Email') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-at"></i>
                </span>
                {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
            </div>
            <label for="password" class="">{{ __('Password') }}</label>
            <div class="input-group mb-3 mtop8">
                <span class="input-group-text">
                    <i class="fa-solid fa-key"></i>
                </span>
                {!! Form::password('password', ['class' => 'form-control','required']) !!}
            </div>
            {!! Form::submit(trans('Sign In'), ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}

            @include('errors')
        </div>
        <div class="footer mtop16">
            <a href="{{ url('/register') }}">{{ __("Don't have an account?") }}</a>
            <a href="{{ url('/recover') }}">{{ __('Forgot you password?') }}</a>
        </div>
    </div>
@stop
