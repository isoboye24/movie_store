@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="relative bg-gray-900">
        <!-- Background image -->
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1574267432553-4b4628081c31?q=80&w=1631&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Background">
            <div class="absolute inset-0 bg-gray-900/60"></div> <!-- overlay -->
        </div>

        <!-- Content -->
        <div class="relative max-w-3xl mx-auto px-6 py-32 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white">Neue Filme sind hier</h1>
            <p class="mt-4 text-lg md:text-xl text-gray-200">
                Die neuen Filme sind gleich auf Lager eingetroffen. Schauen Sie sich die neuesten Optionen aus Ihrer Unterhaltung an, solange sie noch auf Lager sind.
            </p>
            <div class="mt-8">
                <a href="/movies"
                class="inline-block px-6 py-3 text-base font-medium rounded-md bg-white text-gray-900 hover:bg-gray-100 transition">
                    Filme auswählen
                </a>
            </div>
        </div>
    </div>

    {{-- <form action="/logout" method="POST">
        @csrf
        <button class="px-5 py-2 rounded-full bg-orange-500 mt-5">Logout</button>
    </form> --}}
@endsection
