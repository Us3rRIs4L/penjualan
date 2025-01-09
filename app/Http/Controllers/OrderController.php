<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Salesman;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('customer', 'salesman')->get(); 
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch required data for the form (e.g., salesmen, customers)
        $salesmen = Salesman::all(); 
        $customers = Customer::all(); 
        return view('orders.create', compact('salesmen', 'customers')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_date' => 'required|date',
            'amount' => 'required|numeric',
            'salesman_id' => 'required|exists:salesmen,salesman_id',
            'customer_id' => 'required|exists:customers,customer_id',
        ]);

        $order = Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $salesmen = Salesman::all(); 
        $customers = Customer::all(); 
        return view('orders.edit', compact('order', 'salesmen', 'customers')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'order_date' => 'required|date',
            'amount' => 'required|numeric',
            'salesman_id' => 'required|exists:salesmen,salesman_id',
            'customer_id' => 'required|exists:customers,customer_id',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
