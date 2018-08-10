@extends('layouts.app')
@section('content')
    <form action="{{route('order.store')}}" method="post">
        {{csrf_field()}}
        <label>
            <input type="date" placeholder="Дата" name="date">
        </label>
        <label>
            <input type="time" placeholder="Время" name="time">
        </label>
        <label>
            <input type="text" placeholder="Шоу номер" name="show_number">
        </label>
        <label>
            <input type="text" placeholder="Костюмы" name="suit">
        </label>
        <label>
            <input type="text" placeholder="Ресторан" name="restaurant">
        </label>
        <label>
            <input type="text" placeholder="Заказчик" name="customer">
        </label>
        <label>
            <input type="text" placeholder="Контакты заказчика" name="customer_contacts">
        </label>
        <label>
            <input type="text" placeholder="Примечания" name="note">
        </label>
        <label for="">
            <input type="submit">
        </label>
    </form>
@endsection