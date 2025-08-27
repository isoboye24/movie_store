@extends('layouts.app')

@section('title', 'Show Movie')

@section('content')
<div class="p-10 ">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="w-30">
            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" 
                class="w-full h-auto object-cover rounded-xl border border-gray-300">
        </div>
        <div class="">
            <h1 class="text-3xl font-bold mb-4">{{ $movie->title }}</h1>
            <p class="text-gray-600 mb-2">Released: {{ $movie->released }}</p>
            <p class="mb-4">{{ $movie->description }}</p>
            <a href="{{ route('movies.index') }}" class="text-blue-500 hover:underline">Zurück</a>
        </div>
    </div>
</div>
@endsection