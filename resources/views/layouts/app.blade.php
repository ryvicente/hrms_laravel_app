<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HRMS')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-gray-700">
                Lovable HRMS
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ url('/dashboard') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700 @if(request()->is('dashboard')) bg-gray-900 @endif">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>
                <a href="{{ url('/employees') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700 @if(request()->is('employees')) bg-gray-900 @endif">
                    <i class="fas fa-users mr-3"></i> Employees
                </a>
                <a href="{{ url('/employees/create') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700 @if(request()->is('employees/create')) bg-gray-900 @endif">
                    <i class="fas fa-user-plus mr-3"></i> Add Employees
                </a>
                <a href="#" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-calendar-alt mr-3"></i> Leave Management
                </a>
                 <a href="{{ url('/payroll') }}" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700 @if(request()->is('payroll')) bg-gray-900 @endif">
                    <i class="fas fa-money-check-alt mr-3"></i> Payroll
                </a>
                <a href="#" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-file-alt mr-3"></i> Documents
                </a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                <a href="#" class="flex items-center w-full px-4 py-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-sign-out-alt mr-3"></i> Log Out
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('header-title')</h1>
                </div>
                <div class="relative">
                    <button class="flex items-center space-x-2">
                        <img src="https://placehold.co/40x40/E2E8F0/4A5568?text=A" alt="Admin" class="w-10 h-10 rounded-full">
                        <span class="font-medium text-gray-700">Admin User</span>
                        <i class="fas fa-chevron-down text-gray-500"></i>
                    </button>
                    <!-- Dropdown for user settings would go here -->
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
