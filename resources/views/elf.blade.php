@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}"> <img src="{{ config('images.xmasTree')}}" alt="Christmas Tree"></a>
    <a href="{{ route('santa') }}"> <img src="{{ config('images.santa')}}" alt="Santa claus"></a>

    <h2>Elfs view</h2>
    <h3>Toys list</h3>

    @foreach ($toys as $toy)
        <div class="card" style="width: 18rem;">
            <img src="{{$toy->photo}}" class="card-img-top" alt="Photo of {{$toy->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$toy->name}}</h5>
                <p class="card-text">{{$toy->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Min age: {{$toy->min_age}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Toy details</a>
            </div>
        </div>
    @endforeach
@endsection