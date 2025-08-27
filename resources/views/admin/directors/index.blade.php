@extends('layouts.admin')

@section('title', 'Regisseure List')
@section('page-title', 'Regisseure List')

@section('content')
<div class="container mx-auto px-10 py-8">
    <div class="flex justify-between">
        <h2 class="text-2xl font-bold mb-6">Regisseure</h2>
        <a href="/admin/movies/create"><button class="text-white px-5 py-2 rounded-md bg-blue-500">Regisseure Hinzufügen</button></a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Name</th>
                <th class="py-2 px-4 border-b text-left">Email</th>
                <th class="py-2 px-4 border-b text-left">Actions</th>
            </tr>
        </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
@endsection
