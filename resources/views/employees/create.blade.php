@extends('layouts.app')

@section('title', 'Add New Employee')
@section('header-title', 'Create New Employee Account')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md max-w-4xl mx-auto">
    <form action="#" method="POST">
        <!-- Personal Information -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 border-b pb-2 mb-4">Personal Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-600">First Name <span class="text-red-500">*</span></label>
                    <input type="text" id="first_name" name="first_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-600">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" id="last_name" name="last_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-600">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
                 <div class="md:col-span-2">
                    <label for="address" class="block text-sm font-medium text-gray-600">Address</label>
                    <input type="text" id="address" name="address" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>
            </div>
        </div>

        <!-- Employment Information -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-700 border-b pb-2 mb-4">Employment Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="employee_id" class="block text-sm font-medium text-gray-600">Employee ID <span class="text-red-500">*</span></label>
                    <input type="text" id="employee_id" name="employee_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                <div>
                    <label for="joining_date" class="block text-sm font-medium text-gray-600">Joining Date <span class="text-red-500">*</span></label>
                    <input type="date" id="joining_date" name="joining_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                <div>
                    <label for="department" class="block text-sm font-medium text-gray-600">Department <span class="text-red-500">*</span></label>
                    <select id="department" name="department" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        <option>Select Department</option>
                        <option>Engineering</option>
                        <option>Marketing</option>
                        <option>Sales</option>
                        <option>Human Resources</option>
                    </select>
                </div>
                 <div>
                    <label for="position" class="block text-sm font-medium text-gray-600">Position <span class="text-red-500">*</span></label>
                    <input type="text" id="position" name="position" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
            </div>
        </div>
        
        <!-- Account Credentials -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700 border-b pb-2 mb-4">Account Credentials</h2>
             <div class="bg-gray-100 p-4 rounded-md">
                <p class="text-sm text-gray-600">
                    <i class="fas fa-info-circle mr-2"></i>A username and temporary password will be auto-generated and sent to the employee's email address upon account creation.
                </p>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end space-x-4">
            <a href="{{ url('/employees') }}" class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-400">Cancel</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700">Create Employee Account</button>
        </div>
    </form>
</div>
@endsection
