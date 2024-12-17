@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}"> <img src="{{ config('images.xmasTree')}}" alt="Christmas Tree"></a>
    <a href="{{ route('elf') }}"> <img src="{{ config('images.elf')}}" alt="Elf"></a>

    <h2>Santa view</h2>
    <h3>Children list</h3>

    @foreach ($children as $child)
        <div class="card" style="width: 18rem;">
            <img src="{{$child->photo}}" class="card-img-top" alt="Photo of {{$child->name}} {{$child->surname}}">
            <div class="card-body">
                <h5 class="card-title">{{$child->name}} {{$child->surname}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Age: {{$child->age}}</li>
                <li class="list-group-item">Behavior: {{$child->naughty}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Gifts</a>
            </div>
        </div>
    @endforeach

@endsection