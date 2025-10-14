@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('header-title', 'Dashboard Overview')

@section('content')
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="bg-blue-500 text-white p-3 rounded-full">
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Total Employees</p>
                    <p class="text-3xl font-bold">42</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="bg-green-500 text-white p-3 rounded-full">
                    <i class="fas fa-user-check fa-2x"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">On Leave Today</p>
                    <p class="text-3xl font-bold">3</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="bg-yellow-500 text-white p-3 rounded-full">
                    <i class="fas fa-user-plus fa-2x"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">New Hires (Month)</p>
                    <p class="text-3xl font-bold">5</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="bg-red-500 text-white p-3 rounded-full">
                     <i class="fas fa-money-bill-wave fa-2x"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-500">Pending Payroll</p>
                    <p class="text-3xl font-bold">1</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Quick Actions</h2>
        <div class="flex space-x-4">
            <a href="{{ url('employees/create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 flex items-center">
                <i class="fas fa-user-plus mr-2"></i> Add New Employee
            </a>
            <a href="{{ url('payroll') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-700 flex items-center">
                <i class="fas fa-money-check-alt mr-2"></i> Run Payroll
            </a>
        </div>
    </div>

    <!-- Recent Employees List -->
    <div>
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Employees</h2>
        <div class="bg-white rounded-lg shadow-md">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 text-sm font-medium text-gray-600">Employee ID</th>
                            <th class="px-6 py-3 text-sm font-medium text-gray-600">Name</th>
                            <th class="px-6 py-3 text-sm font-medium text-gray-600">Department</th>
                            <th class="px-6 py-3 text-sm font-medium text-gray-600">Joining Date</th>
                            <th class="px-6 py-3 text-sm font-medium text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-6 py-4">EMP042</td>
                            <td class="px-6 py-4">Jane Doe</td>
                            <td class="px-6 py-4">Engineering</td>
                            <td class="px-6 py-4">2025-09-28</td>
                            <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">View</a></td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-4">EMP041</td>
                            <td class="px-6 py-4">Mark Johnson</td>
                            <td class="px-6 py-4">Marketing</td>
                            <td class="px-6 py-4">2025-09-25</td>
                            <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">View</a></td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-6 py-4">EMP040</td>
                            <td class="px-6 py-4">John Smith</td>
                            <td class="px-6 py-4">Sales</td>
                            <td class="px-6 py-4">2025-09-15</td>
                            <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-4 text-right">
                <a href="{{ url('/employees') }}" class="text-blue-600 hover:underline">View All Employees &rarr;</a>
            </div>
        </div>
    </div>
@endsection
