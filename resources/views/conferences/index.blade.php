<!-- resources/views/conferences/index.blade.php -->

@extends('layouts.app')

@section('title', 'Konferencijos')

@section('content')
    <h2>Konferencijų sąrašas</h2>

    @foreach($conferences as $conference)
        <div>
            <h3>{{ $conference->title }}</h3>
            <p>Data: {{ $conference->date }}</p>
            <p>Laikas: {{ $conference->time }}</p>
            <a href="{{ route('conferences.edit', ['id' => $conference->id]) }}">Edit</a></p>
        </div>
        
    @endforeach

    <a href="{{ route('conferences.create') }}">Create New Conference</a>
@endsection