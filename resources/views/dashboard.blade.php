@extends('components.layouts.app')

@section('page_title', 'Dashboard')

@section('content')
    @component('components.fragments.report', [
        'totalCustomers' => $totalCustomers,
        'totalOrders' => $totalOrders,
        'totalSalesman' => $totalSalesman,
        'totalAmount' => $totalAmount,
    ])
    @endcomponent
@endsection
