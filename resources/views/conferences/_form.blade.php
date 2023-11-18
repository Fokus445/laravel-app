<!-- resources/views/conferences/_form.blade.php -->

<div>
    <label for="title">Konferencijos pavadinimas:</label>
    <input type="text" name="title" id="title" value="{{ old('title', $conference->title ?? '') }}" required>
</div>

<div>
    <label for="date">Data:</label>
    <input type="date" name="date" id="date" value="{{ old('date', $conference->date ?? '') }}" required>
</div>

<div>
    <label for="time">Laikas:</label>
    <input type="time" name="time" id="time" value="{{ old('time', $conference->time ?? '') }}" required>
</div>
