@extends('layouts.app')
@section('content')
    <form action="{{route('order.update',['id' => $order->id])}}" method="post">
        {{csrf_field()}}

        <label>
            <input type="date" value="{{$order->date}}" name="date">
        </label>
        <label>
            <input type="time" value="{{$order->time}}" name="time">
        </label>
        <label>
            <input type="text" value="{{$order->show_number}}" name="show_number">
        </label>
        <label>
            <input type="text" value="{{$order->suit}}" name="suit">
        </label>
        <label>
            <input type="text" value="{{$order->restaurant}}" name="restaurant">
        </label>
        <label>
            <input type="text" value="{{$order->customer}}" name="customer">
        </label>
        <label>
            <input type="text" value="{{$order->customer_contacts}}" name="customer_contacts">
        </label>
        <label>
            <input type="text" value="{{$order->note}}" name="note">
        </label>

        <label for="">
            <button type="submit">Сохранить</button>
        </label>
    </form>
@endsection
