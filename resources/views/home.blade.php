@extends('layouts.app')

@section('content')
    <a href="{{ route('santa') }}"> <img src="{{ config('image.santa')}}" alt="Santa claus"></a>
    <a href="{{ route('elf') }}"> <img src="{{ config('image.elf')}}" alt="Elf"></a>
@endsection