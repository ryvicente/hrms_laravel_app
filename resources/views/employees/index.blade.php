@extends('layouts.app')

@section('title', 'Employee List')
@section('header-title', 'Manage Employees')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">All Employees</h2>
        <a href="{{ url('employees/create') }}" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-700 flex items-center">
            <i class="fas fa-user-plus mr-2"></i> Add New Employee
        </a>
    </div>

    <!-- Search and Filter -->
    <div class="mb-4">
        <input type="text" placeholder="Search for an employee..." class="w-full border border-gray-300 rounded-md shadow-sm p-3">
    </div>

    <!-- Employee Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Employee ID</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Name</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Email</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Department</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Position</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Row 1 -->
                <tr class="border-b">
                    <td class="px-6 py-4">EMP001</td>
                    <td class="px-6 py-4">Alice Williams</td>
                    <td class="px-6 py-4">alice.w@example.com</td>
                    <td class="px-6 py-4">Engineering</td>
                    <td class="px-6 py-4">Senior Developer</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                 <!-- Sample Row 2 -->
                <tr class="border-b bg-gray-50">
                    <td class="px-6 py-4">EMP002</td>
                    <td class="px-6 py-4">Bob Brown</td>
                    <td class="px-6 py-4">bob.b@example.com</td>
                    <td class="px-6 py-4">Sales</td>
                    <td class="px-6 py-4">Sales Manager</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection
