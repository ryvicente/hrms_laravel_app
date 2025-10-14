@extends('layouts.app')

@section('title', 'Leave Management')
@section('header-title', 'Manage Employee Leave')

@section('content')
<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-gray-500 font-medium">Annual Leave</h3>
        <p class="text-3xl font-bold my-2">15 <span class="text-lg font-normal text-gray-400">Days</span></p>
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 40%"></div>
        </div>
        <div class="flex justify-between text-sm text-gray-500 mt-2">
            <span>Used: 6</span>
            <span>Total: 21</span>
        </div>
    </div>
    <!-- Duplicating for visual representation -->
     <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-gray-500 font-medium">Medical Leave</h3>
        <p class="text-3xl font-bold my-2">10 <span class="text-lg font-normal text-gray-400">Days</span></p>
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-green-600 h-2.5 rounded-full" style="width: 20%"></div>
        </div>
        <div class="flex justify-between text-sm text-gray-500 mt-2">
            <span>Used: 2</span>
            <span>Total: 10</span>
        </div>
    </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-gray-500 font-medium">Casual Leave</h3>
        <p class="text-3xl font-bold my-2">12 <span class="text-lg font-normal text-gray-400">Days</span></p>
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 50%"></div>
        </div>
        <div class="flex justify-between text-sm text-gray-500 mt-2">
            <span>Used: 6</span>
            <span>Total: 12</span>
        </div>
    </div>
     <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-gray-500 font-medium">Unpaid Leave</h3>
        <p class="text-3xl font-bold my-2">1 <span class="text-lg font-normal text-gray-400">Day</span></p>
         <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-red-500 h-2.5 rounded-full" style="width: 10%"></div>
        </div>
         <div class="flex justify-between text-sm text-gray-500 mt-2">
            <span>Used: 1</span>
        </div>
    </div>
</div>

<!-- Actions -->
<div class="mb-6 flex space-x-4">
    <button class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-700">Leave Request</button>
    <button class="bg-white border border-gray-300 text-gray-800 px-5 py-2 rounded-lg hover:bg-gray-100">Calendar</button>
    <button class="bg-white border border-gray-300 text-gray-800 px-5 py-2 rounded-lg hover:bg-gray-100">Apply Leave</button>
</div>


<!-- Recent Leave Requests Table -->
<div class="bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Recent Leave Requests</h2>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Employee</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Type</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">From</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">To</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Days</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Reason</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Status</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Row 1 -->
                <tr class="border-b">
                    <td class="px-6 py-4">Aldrey Anacion</td>
                    <td class="px-6 py-4">Annual Leave</td>
                    <td class="px-6 py-4">2024-01-15</td>
                    <td class="px-6 py-4">2024-01-15</td>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4">Family Vacation</td>
                    <td class="px-6 py-4"><span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Approved</span></td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">View</a></td>
                </tr>
                 <!-- Sample Row 2 -->
                <tr class="border-b bg-gray-50">
                    <td class="px-6 py-4">Aldrey Anacion</td>
                    <td class="px-6 py-4">Annual Leave</td>
                    <td class="px-6 py-4">2024-01-15</td>
                    <td class="px-6 py-4">2024-01-15</td>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4">Medical Appointment</td>
                    <td class="px-6 py-4"><span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Approved</span></td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">View</a></td>
                </tr>
                <!-- Sample Row 3 -->
                <tr class="border-b">
                    <td class="px-6 py-4">Aldrey Anacion</td>
                    <td class="px-6 py-4">Annual Leave</td>
                    <td class="px-6 py-4">2024-01-15</td>
                    <td class="px-6 py-4">2024-01-15</td>
                    <td class="px-6 py-4">5</td>
                    <td class="px-6 py-4">Medical Appointment</td>
                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">Pending</span></td>
                    <td class="px-6 py-4 flex space-x-2">
                        <button class="bg-green-500 text-white px-3 py-1 rounded-md text-sm hover:bg-green-600">Approve</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600">Reject</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
