@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Панель управления заказами</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route('order.create')}}" class="btn-default">Добавить заказ</a>
                        <br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Дата</th>
                                <th>Время</th>
                                <th>Шоу номер</th>
                                <th>Костюмы</th>
                                <th>Ресторан</th>
                                <th>Заказчик</th>
                                <th>Контакты заказчика</th>
                                <th>Примечание</th>
                                <th>Управление</th>
                            </tr>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->date}}</td>
                                    <td>{{$order->time}}</td>
                                    <td>{{$order->show_number}}</td>
                                    <td>{{$order->suit}}</td>
                                    <td>{{$order->restaurant}}</td>
                                    <td>{{$order->customer}}</td>
                                    <td>{{$order->customer_contacts}}</td>
                                    <td>{{$order->note}}</td>
                                    <td>
                                        <a href="{{route('order.edit', ['id' => $order->id])}}" class="btn-default">Изменить
                                            заказ</a>
                                        <br>
                                        <a href="{{route('order.delete', ['id' => $order->id])}}"
                                           class="btn-danger">Удалить заказ</a>
                                    </td>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
