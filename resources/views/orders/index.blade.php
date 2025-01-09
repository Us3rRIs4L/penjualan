@extends('components.layouts.app')

@section('page_title', 'Orders')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  ID
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Customer
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Salesman
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Amount
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date
                </th>
                <th class="px-6 py-3 bg-gray-50"></th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @forelse ($orders as $order)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">{{ $order->order_id }}</td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->customer ? $order->customer->customer_name : 'N/A' }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->salesman ? $order->salesman->salesman_name : 'N/A' }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    {{ number_format($order->amount, 2) }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    {{ $order->order_date ? $order->order_date->format('d M Y') : 'N/A' }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('orders.edit', $order) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-green-600 hover:bg-green-700">
                      Edit
                    </a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-red-600 hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this order?')">
                        Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center text-muted">No orders found.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
