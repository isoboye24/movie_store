@extends('layouts.admin')

@section('title', 'Create Movie')

@section('content')
    <h2 class="text-2xl text-center font-semibold mt-10 mb-5">Create Movie</h2>
    @include('forms.movie-form')
@endsection
      
      
      