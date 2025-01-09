<div class="grid grid-cols-4 gap-10 p-4">
    <div class="bg-teal-50 rounded-lg p-4">
        <h2 class="text-lg font-medium">Total Pelanggan</h2>
        <p class="text-3xl font-bold">{{ $totalCustomers }}</p>
    </div>
    <div class="bg-teal-50 rounded-lg p-4">
        <h2 class="text-lg font-medium">Total Pesanan</h2>
        <p class="text-3xl font-bold">{{ $totalOrders }}</p>
    </div>
    <div class="bg-teal-50 rounded-lg p-4">
        <h2 class="text-lg font-medium">Total Salesman</h2>
        <p class="text-3xl font-bold">{{ $totalSalesman }}</p>
    </div>
    <div class="bg-teal-50 rounded-lg p-4">
        <h2 class="text-lg font-medium">Total Pendapatan</h2>
        <p class="text-3xl font-bold">Rp {{ $totalAmount }}</p>
    </div>
</div>
