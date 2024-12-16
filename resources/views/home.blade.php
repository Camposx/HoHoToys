@extends('layouts.app')

@section('content')
    <a href="{{ route('santa') }}"> <img src="{{ config('images.santa')}}" alt="Santa claus"></a>
    <a href="{{ route('elf') }}"> <img src="{{ config('images.elf')}}" alt="Elf"></a>
@endsection