<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://unpkg.com/heroicons@2.0.16/20/solid/heroicons.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-gray-200 flex flex-col">
            <div class="p-4 text-xl font-bold border-b border-gray-700">
                Admin Panel
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block p-2 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('admin.users.index') }}" class="block p-2 rounded hover:bg-gray-700">Users</a>
                <a href="{{ route('admin.products.index') }}" class="block p-2 rounded hover:bg-gray-700">Products</a>
                <a href="{{ route('admin.movies.index') }}" class="block p-2 rounded hover:bg-gray-700">Movies</a>
                <a href="{{ route('admin.orders.index') }}" class="block p-2 rounded hover:bg-gray-700">Orders</a>
                <a href="{{ route('admin.directors.index') }}" class="block p-2 rounded hover:bg-gray-700">Directors</a>
                <a href="{{ route('admin.settings.index') }}" class="block p-2 rounded hover:bg-gray-700">Settings</a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <!-- Top Navbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="/" target="_blank"><button class="px-5 py-1 text-slate-100 bg-slate-600 hover:bg-slate-700 rounded-full transition ease-in-out duration-500">Site</button></a>
                    <div class="h-[40px] w-[1px] border-r border-slate-600"></div>
                    <h1 class="text-lg font-semibold">@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Hello, Admin</span>
                    <img src="https://ui-avatars.com/api/?name=Admin" alt="Admin Avatar" class="w-8 h-8 rounded-full">
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-6">
                @yield('content')
            </div>
        </main>
    </div>

</body>
</html>
