@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <div style="background-color: bisque">
        <br><br><br>
        @include('inc.maps')<br>
        <a href="/kurs-app/public/menu">Меню</a><br>
        <a href="/kurs-app/public/order">Замовити стіл</a>
        <br><br><br>
    </div>
@endsection

