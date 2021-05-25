@extends('layouts.app')

@section('title', 'Krutetsky')


@section('content')
    <div style="background-color: bisque">
        <br><br><br>
        <a href="{{ route('contacts') }}">Де нас знайти</a><br>
        <a href="{{ route('menu') }}">Меню</a><br>
        <a href="{{ route('order') }}">Замовити столик</a><br>
        <a href="{{ route('reviews') }}">Рецензії</a><br>
        <br><br><br>
    </div>
@endsection
