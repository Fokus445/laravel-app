<!-- resources/views/conferences/index.blade.php -->

@extends('layouts.app')

@section('title', 'Konferencijos')

@section('content')
    <h2>Konferencijų sąrašas</h2>

    <ul class="conferences-list">
        @foreach($conferences as $conference)
            <li class="conference-item">
                <span class="conference-title">{{ $conference->title }}</span>
                <p>Date: {{ $conference->date }}</p>
                <p>Time: {{ $conference->time }}</p>
                <a href="{{ route('conferences.edit', ['id' => $conference->id]) }}" class="conference-edit-link">Edit</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('conferences.create') }}" class="create-conference-link">Create New Conference</a>

@endsection