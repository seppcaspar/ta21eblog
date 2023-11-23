@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <h1>Hello Laravel and</h1>
    <d
    <ul>
        @for($i=0; $i<10; $i++)
            @if($i%2==0)
                <li>{{ $i }}</li>
            @endif
        @endfor
    </ul>
@endsection
