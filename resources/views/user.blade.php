@extends('_layout')

@section('content')
    <div class="content">
        <div class="title">Hello {{ $name }}</div>
        <div><a href="{{ url('/') }}">back</a></div>
    </div>
@stop