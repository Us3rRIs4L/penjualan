@extends('components.layouts.app')

@section('page_title', 'Salesmen')

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
                                    Nama
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kota
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Komisi
                                </th>
                                <th class="px-6 py-3 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($salesmen as $salesman)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $salesman->salesman_id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $salesman->salesman_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $salesman->salesman_city }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $salesman->commission }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('salesman.edit', $salesman) }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-green-600 hover:bg-green-700">
                                        Edit
                                    </a>
                                    <form action="{{ route('salesman.destroy', $salesman) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-red-600 hover:bg-red-700">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Add Sales Button -->
        <div class="mt-4">
            <a href="{{ route('salesman.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white bg-blue-600 hover:bg-blue-700">
                Add Sales
            </a>
        </div>
    </div>
</div>
@endsection
