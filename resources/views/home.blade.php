@extends('layouts.app')

@section('content')
    <div class="homeSection">
        <a href="{{ route('santa') }}"> <img src="{{ config('images.santa')}}" alt="Santa claus"></a>
        <a href="{{ route('elf') }}"> <img src="{{ config('images.elf')}}" alt="Elf"></a>
    </div>
@endsection