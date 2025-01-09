<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-teal-100 via-sky-200 to-blue-200 min-h-screen flex flex-col">
    <div class="flex flex-1">
        <!-- Sidebar -->
        @include('components.fragments.sidebar')

        <!-- Main content -->
        <main class="flex-1 flex flex-col">
            <!-- Navbar -->
            @include('components.fragments.navbar')

            <!-- Main container -->
            <div class="container flex-1">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer class="bg-blue-300 bg-opacity-10 backdrop-blur-lg shadow-md text-center mt-auto p-4">
                <p class="text-gray-600">&copy; Afrisal</p>
            </footer>
        </main>
    </div>
</body>
</html>
