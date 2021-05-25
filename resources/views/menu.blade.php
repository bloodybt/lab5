@extends('layouts.app')

@section('title', 'Menu')


@section('content')
    <div style="background-color: bisque">
        <br><br><br>
        <a href="{{ route('order') }}">Замовити стіл</a>
        <br><br><br>
    </div>
@endsection

