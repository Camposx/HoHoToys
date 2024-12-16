@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}"> <img src="{{ config('image.xmasTree')}}" alt="Christmas Tree"></a>
    <a href="{{ route('santa') }}"> <img src="{{ config('image.santa')}}" alt="Santa claus"></a>
@endsection