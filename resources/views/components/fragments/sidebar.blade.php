<div class="flex flex-col min-h-screen w-64 bg-gray-100 shadow-lg">
    <!-- Header -->
    <div class="flex items-center justify-center p-4 h-16 bg-gradient-to-b from-teal-100 to-cyan-100 shadow-lg">
        <h2 class="text-xl font-bold text-cyan-700">The Dashboard</h2>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 py-5">
        <ul class="space-y-4 pl-6 min-w-full">
            @foreach([
                ['name' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'home'],
                ['name' => 'Orders', 'route' => 'orders', 'icon' => 'shopping-cart'],
                ['name' => 'Customers', 'route' => 'customers', 'icon' => 'users'],
                ['name' => 'Salesman', 'route' => 'salesman', 'icon' => 'person']
            ] as $item)
            <li class="{{ Request::routeIs($item['route']) ? 'bg-cyan-200 rounded-l-lg' : '' }}">
                <a href="{{ route($item['route']) }}" class="flex items-center p-3 pr-0 text-gray-700 hover:bg-cyan-200 hover:pr-0 hover:rounded-l-lg">
                    <!-- Heroicon -->
                    <x-icon :name="$item['icon']" class="w-2 h-2" />
                    <span class="ml-4 text-sm font-medium">{{ $item['name'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</div>
