@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<div class="px-10 py-5">
    <div class="relative w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">
        @foreach ($movies as $movie)
            <!-- Card -->
            <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 text-center">

                <!-- Card image -->
                <a href="#!">
                    <img class="rounded-t-lg" src="{{ $movie->image_url }}" alt="" />
                </a>

                <!-- Card body -->
                <div class="p-6">
                    <h5 class="mb-1 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                        {{ $movie->title }}
                    </h5>
                    <p class="mb-2 text-sm text-neutral-500 dark:text-neutral-300 italic">
                        Erscheinungsjahr: <strong>{{ $movie->released }}</strong> 
                    </p>
                    <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                        {{ \Illuminate\Support\Str::limit($movie->description, 15) }}
                    </p>
                    <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300 text-sm">
                        Regisseur: <strong class="italic underline">{{ $movie->director->name }}</strong> 
                    </p>

                    <!-- Button -->
                    <a href="/movies/{{ $movie->id }}"
                    class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        View movie
                    </a>
                </div>
            </div>
            <!-- Card -->
        @endforeach
    </div>
</div>
@endsection
      
      
      