@extends('layouts.app')

@section('title', 'Payroll Management - Accountant Dashboard')
@section('header-title', 'Payroll Management System')

@section('content')
<div class="space-y-6">
    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-sm mb-1">Pending Payroll</h3>
            <p class="text-2xl font-bold">2</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-sm mb-1">Total Employees</h3>
            <p class="text-2xl font-bold">45</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-sm mb-1">This Month's Payroll</h3>
            <p class="text-2xl font-bold">₱1.2M</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-gray-500 text-sm mb-1">Processed This Month</h3>
            <p class="text-2xl font-bold">1/2</p>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="bg-white rounded-lg shadow-md">
        <!-- Tabs -->
        <div class="border-b px-6">
            <nav class="flex space-x-6" aria-label="Tabs">
                <button class="border-b-2 border-blue-500 py-4 px-1 text-sm font-medium text-blue-600">
                    Current Payroll
                </button>
                <button class="border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:border-gray-300">
                    Payroll History
                </button>
                <button class="border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:border-gray-300">
                    Deductions
                </button>
                <button class="border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:border-gray-300">
                    Reports
                </button>
            </nav>
        </div>

        <!-- Current Payroll Content -->
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">October 2025 - Second Half</h2>
                    <p class="text-sm text-gray-500">Period: Oct 16 - Oct 31, 2025</p>
                </div>
                <div class="flex space-x-4">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fas fa-download mr-2"></i>Download Template
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fas fa-upload mr-2"></i>Import Data
                    </button>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700">
                        <i class="fas fa-plus mr-2"></i>New Entry
                    </button>
                </div>
            </div>

            <!-- Payroll Table -->
            <div class="overflow-x-auto border rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Employee</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Base Salary</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Allowances</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deductions</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Net Salary</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Alice Williams</div>
                                    <div class="text-sm text-gray-500">EMP001 • IT Department</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱45,000.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱5,000.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱8,500.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₱41,500.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Verified
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                <a href="#" class="text-blue-600 hover:text-blue-900">View</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div>
                                    <div class="text-sm font-medium text-gray-900">Bob Brown</div>
                                    <div class="text-sm text-gray-500">EMP002 • Marketing</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱35,000.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱3,000.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₱6,200.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₱31,800.00</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                <a href="#" class="text-blue-600 hover:text-blue-900">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-between py-3">
                <div class="flex items-center">
                    <span class="text-sm text-gray-700">Showing 1 to 2 of 2 entries</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-end space-x-4">
        <button class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200">
            Save Draft
        </button>
        <button class="px-6 py-3 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700">
            <i class="fas fa-check-circle mr-2"></i>Process Payroll
        </button>
    </div>
</div>
@endsection
