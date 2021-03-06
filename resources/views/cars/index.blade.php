@extends('layouts.app')

@section('script')

@endsection

@section('style')

@endsection


@section('content')
<div class="row">
    <div class="card-group">
        @foreach($cars as $car)
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="img/car1.jpg" alt="Card image car1">
                <div class="card-body">
                    <h4 class="card-title">{{ $car->brand }} {{ $car->type }}</h4>
                    <ul class="list-group">
                        <li class="list-group-item justify-content-between">
                            {{ $car->description }}
                        </li>
                        <li class="list-group-item justify-content-between">
                            {{ $car->price }}
                        </li>
                    </ul>
                    <a href="cars/{{ $car->id }}" class="btn btn-primary">Rent</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection