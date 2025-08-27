@extends('layouts.admin')

@section('title', 'Edit Movie')

@section('content')
    @include('forms.movie-form', ['movie' => $movie])
@endsection