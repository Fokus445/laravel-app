@extends('layouts.app')

@section('title', 'Konferencijos redagavimas')

@section('content')
    <h2>Redaguoti konferenciją</h2>

    <form action="{{ route('conferences.update', $conference->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences._form')

        <button type="submit">Atnaujinti konferenciją</button>
    </form>

    <a href="{{ route('conferences.index') }}">Atgal</a></li>
@endsection