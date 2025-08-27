@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="px-5">
        <div class="text-2xl text-center mt-5">About page</div>
        <button onclick="history.back()" 
        class="px-10 py-2 bg-cyan-400 text-white rounded-full hover:bg-cyan-500 transition ease-in-out duration-500">
        Back
        </button>
    </div>
@endsection