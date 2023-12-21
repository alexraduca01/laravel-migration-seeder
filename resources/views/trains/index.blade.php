@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main class="container">
    <h1 class="text-center">Trains</h1>
    <div class="row">
        @foreach ($trains as $item)
        <div class="gy-3 col-md-4 col-lg-3">
            <div class="card">
                <img src="https://picsum.photos/200" alt="treno">
                <div class="card-body">
                    <h5>Azienda: {{ $item->company }} <br> Stazione di partenza: {{ $item->departure_station }}</h5>
                    <p>Codice treno: {{ $item->train_code }} Carrozze: {{ $item->number_of_carriages }}</p>
                    <p>Partenza: {{ $item->departure_time }} Arrivo: {{ $item->arrival_time }}</p>
                    <p>Cancellato:
                        @php
                            if($item->canceled == 0){
                                echo 'Si';
                            } else {
                                echo 'No';
                            }
                        @endphp
                        In orario:
                        @php
                            if($item->on_time == 0){
                                echo 'No';
                            } else {
                                echo 'Si';
                            }
                        @endphp
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection
