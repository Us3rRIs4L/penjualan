<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Salesman;

class ReportController extends Controller
{
    public function index()
    {
        $totalCustomers = Customer::count();
        $totalOrders = Order::count();
        $totalSalesman = Salesman::count();
        $totalAmount = Order::sum('amount');

        return view('dashboard', compact('totalCustomers', 'totalOrders', 'totalSalesman', 'totalAmount'));
    }
}
