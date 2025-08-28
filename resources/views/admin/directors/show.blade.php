@extends('layouts.admin')

@section('title', 'Show Regisseur')

@section('content')
<div class="p-10 ">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="w-30">
            <img src="{{ $director->image_url }}" alt="{{ $director->name }}" 
                class="w-full h-auto object-cover rounded-xl border border-gray-300">
        </div>
        <div class="">
            <h1 class="text-3xl font-bold mb-4">{{ $director->name }}</h1>
            <p class="text-gray-600 mb-2">Email: {{ $director->email }}</p>
            <a href="{{ route('admin.directors.index') }}" class="text-blue-500 hover:underline">Zurück</a>
        </div>
    </div>
</div>
@endsection