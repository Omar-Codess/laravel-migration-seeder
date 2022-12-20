@extends('layouts.app')

@section('title', 'Treni in partenza oggi')

@section('content')
    <div class="container">
        <h2>Treni</h2>
        <ul>
            @forelse ($trains as $train)
                <li>
                    <p>
                        {{ $train->departure_station }} - {{ $train->arrival_station }}
                    </p>
                </li>

            @empty
                <li>
                    <p>non ci sono treni in partenza</p>
                </li>
            @endforelse
        </ul>

    </div>

@endsection
