@extends('layouts.app')

@section('title', 'Payroll Management')
@section('header-title', 'Process Payroll')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800">Payroll Run</h2>
            <p class="text-gray-500">Process salaries for the current pay period.</p>
        </div>
        <div>
            <label for="pay_period" class="block text-sm font-medium text-gray-600">Select Pay Period</label>
            <select id="pay_period" name="pay_period" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                <option>October 1 - October 15, 2025</option>
                <option>October 16 - October 31, 2025</option>
            </select>
        </div>
    </div>

    <!-- Payroll Review Table -->
    <div class="overflow-x-auto mb-6">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Employee</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Gross Earnings</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Deductions</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Net Pay</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Row 1 -->
                <tr class="border-b">
                    <td class="px-6 py-4">Alice Williams (EMP001)</td>
                    <td class="px-6 py-4">₱45,000.00</td>
                    <td class="px-6 py-4">₱8,500.00</td>
                    <td class="px-6 py-4 font-bold">₱36,500.00</td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-blue-600 hover:underline">View Details</a>
                    </td>
                </tr>
                 <!-- Sample Row 2 -->
                <tr class="border-b bg-gray-50">
                    <td class="px-6 py-4">Bob Brown (EMP002)</td>
                    <td class="px-6 py-4">₱35,000.00</td>
                    <td class="px-6 py-4">₱6,200.00</td>
                    <td class="px-6 py-4 font-bold">₱28,800.00</td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-blue-600 hover:underline">View Details</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Finalize Action -->
     <div class="flex justify-end">
        <button class="bg-green-600 text-white px-8 py-3 rounded-lg shadow-md hover:bg-green-700 flex items-center font-semibold">
            <i class="fas fa-check-circle mr-2"></i> Finalize Payroll for 2 Employees
        </button>
    </div>
</div>
@endsection
