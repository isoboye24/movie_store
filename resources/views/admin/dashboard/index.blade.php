@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Stats Cards -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-gray-600 text-sm">Users</h2>
        <p class="text-2xl font-bold">1,240</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-gray-600 text-sm">Orders</h2>
        <p class="text-2xl font-bold">350</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-gray-600 text-sm">Revenue</h2>
        <p class="text-2xl font-bold">$12,400</p>
    </div>
</div>

<div class="mt-6 bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2">Order ID</th>
                <th class="p-2">Customer</th>
                <th class="p-2">Status</th>
                <th class="p-2">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="p-2">#1234</td>
                <td class="p-2">John Doe</td>
                <td class="p-2 text-green-600">Completed</td>
                <td class="p-2">$250</td>
            </tr>
            <tr class="border-b">
                <td class="p-2">#1235</td>
                <td class="p-2">Jane Smith</td>
                <td class="p-2 text-yellow-600">Pending</td>
                <td class="p-2">$120</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
