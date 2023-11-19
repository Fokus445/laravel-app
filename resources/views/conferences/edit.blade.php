@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Conference</h2>

        <form action="{{ route('conferences.update', ['id' => $conference->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ $conference->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" value="{{ $conference->date }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" id="time" value="{{ $conference->time }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Conference</button>
        </form>
        <a href="{{ route('conferences.index') }}"><button class="return-home-btn">Atgal</button></a>
    </div>
@endsection
