@extends('layouts.main')

@section('content')

<h1>HOMEPAGE</h1>

<h3>Benvenuto {{ $user }}</h3>


{{-- section products --}}

<section>
    <ul>
        @foreach ($cards as $card)
            <li>
                <a href="">
                    <img src="{{ $card['src'] }}" alt="product img">
                    <h3>Vedi prodotto</h3>
                </a>                
            </li>   
        @endforeach
    </ul>
</section>


@endsection
