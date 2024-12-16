@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}"> <img src="{{ config('image.xmasTree')}}" alt="Christmas Tree"></a>
    <a href="{{ route('elf') }}"> <img src="{{ config('image.elf')}}" alt="Elf"></a>
@endsection