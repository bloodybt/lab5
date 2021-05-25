@extends('layouts.app')

@section('title', 'Order')


@section('content')
    <br><br><br>
    <form action="order/submit" method="post">
        Замовлення столиків<br>
        <input type="text" name="name" placeholder="Ім'я" id="name"><br>
        <input type="text" name="email" placeholder="Email" id="email"><br>
        <input type="text" name="comments" placeholder="Кількість людей та час" id="comments"><br>
        <button type="submit">Замовити</button>
    </form>
    <br><br><br>
@endsection

