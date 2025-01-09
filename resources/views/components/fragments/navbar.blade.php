<nav class="flex items-center justify-between p-5">
    <!-- Header -->
    <div class="flex items-center justify-center p-4 h-16">
        <h1 class="text-gray-800 text-2xl font-bold">
            @yield('page_title', 'Dashboard')
        </h1>
    </div>

    <!-- Search & Profile -->
    <div class="flex items-center space-x-4 bg-teal-50 p-4 rounded-2xl">
        <input type="text" class="border border-primary-2 rounded-lg p-1 text-gray-600" placeholder="Search">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:transform hover:scale-125">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
        <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="rounded-full w-8 h-8 hover:transform hover:scale-110">
    </div>
</nav>
