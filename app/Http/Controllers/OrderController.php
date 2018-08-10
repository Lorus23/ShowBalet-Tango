<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('order.create');
    }

    public function edit($id)
    {
        $data['order'] = Order::findOrFail($id);

        return view('order.edit', $data);
    }

    public function store(Request $request, Order $orderModel)
    {
        $request->validate([
            'date' => 'date',
            'restaurant' => 'required',
            'customer' => 'required',
            'customer_contacts' => 'required',
        ]);
        $orderModel->create($request->all());
        return redirect()->route('home');
    }

    public function delete($id)
    {
        Order::destroy($id);
        return redirect()->route('home');
    }
}
