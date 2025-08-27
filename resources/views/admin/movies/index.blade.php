@extends('layouts.admin')

@section('title', 'Movies List')
@section('page-title', 'Movies List')

@section('content')
<div class="container mx-auto px-10 py-8">
    <div class="flex justify-between">
        <h2 class="text-2xl font-bold mb-6">Movies List</h2>
        <a href="/admin/movies/create"><button class="text-white px-5 py-2 rounded-md bg-blue-500">Add Movie</button></a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Titel</th>
                <th class="py-2 px-4 border-b text-left">Erscheinungsjahr</th>
                <th class="py-2 px-4 border-b text-left">Beschreibung</th>
                <th class="py-2 px-4 border-b text-left">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b">{{ $movie->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $movie->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $movie->released }}</td>
                        <td class="py-2 px-4 border-b">{{ \Illuminate\Support\Str::limit($movie->description, 10) }}</td>
                        <td class="py-2 px-4 border-b flex space-x-2">
                            <!-- View -->
                            <a href="{{ route('movies.show', $movie->id) }}" class="text-blue-500 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('admin.movies.edit', $movie->id) }}" class="text-yellow-500 hover:text-yellow-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536M9 11l-2 2 2 2m3-5l2 2 2-2m-2-2l-6 6-2 2m12-6l-2 2" />
                                </svg>
                            </a>

                            <!-- Delete -->
                            <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" class="inline"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                @if($movies->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center py-4">No movies found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
