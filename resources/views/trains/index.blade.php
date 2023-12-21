@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Trains</h1>
    <ul>
        @foreach ($trains as $item)
            <li>{{ $item->id }}</li>
            <li>{{ $item->company }}</li>
            <li>{{ $item->departure_station }}</li>
            <li>{{ $item->arrival_station }}</li>
        @endforeach
    </ul>
</main>

@endsection
