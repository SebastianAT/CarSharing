@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('createFeedback', [$car->id]) }}">
    {{csrf_field()}}

    <h4 id="list-item-3">Bewertung abgeben für:</h4>

    <h2>{{ $car->brand }} {{ $car->car_type }} </h2>

    <div class="form-group">
        <textarea class="form-control" name="inhalt" rows="3" value="" required></textarea>
    </div>
    <input type="submit" value="Senden" class="btn btn-primary">
</form>

@endsection
