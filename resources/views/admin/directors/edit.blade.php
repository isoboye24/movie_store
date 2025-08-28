@extends('layouts.admin')

@section('title', 'Edit Director')

@section('content')
    @include('forms.director-form', ['director' => $director])
@endsection