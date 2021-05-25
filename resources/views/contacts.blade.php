@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <div style="background-color: bisque">
        <br><br><br>
        @include('inc.maps')<br>
        <a href="{{ route('menu') }}">Меню</a><br>
        <a href="{{ route('order') }}">Замовити стіл</a>
        <br><br><br>
    </div>
@endsection

