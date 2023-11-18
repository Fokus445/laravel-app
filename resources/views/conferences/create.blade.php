@extends('layouts.app')

@section('title', 'Naujos konferencijos kūrimas')

@section('content')
    <h2>Nauja konferencija</h2>

    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('conferences._form')

        <button type="submit">Sukurti konferenciją</button>
    </form>
@endsection