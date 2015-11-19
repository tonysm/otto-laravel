@extends('_layout')

@section('content')
    <div class="content">
        <div class="title">Write your name here</div>
        <form method="POST">
            {{ csrf_field() }}
            <input type="text" name="name" />
            <button type="submit">Enviar</button>
        </form>
    </div>
@stop
