@extends('layouts.main')

@section('content')

<h1>HOMEPAGE</h1>

<h3>Benvenuto {{ $user }}</h3>


{{-- section products --}}
<section class="pasta-type container">
    <h2>LE LUNGHE</h2>
    <ul class="cards">
        @foreach ($lunghe as $card)
            <li class="card">
                <a href="">
                    <img src="{{ $card['src'] }}" alt="product img">
                    <h3>{{ $card['titolo'] }}</h3>
                    <h4>Vedi prodotto</h4>
                </a>                
            </li>   
        @endforeach
    </ul>
</section>

<section class="pasta-type container">
    <h2>LE CORTE</h2>
    <ul class="cards">
        @foreach ($corte as $card)
            <li class="card">
                <a href="">
                    <img src="{{ $card['src'] }}" alt="product img">
                    <h3>{{ $card['titolo'] }}</h3>
                    <h4>Vedi prodotto</h4>
                </a>                
            </li>   
        @endforeach
    </ul>
</section>

<section class="pasta-type container">
    <h2>LE CORTISSIME</h2>
    <ul class="cards">
        @foreach ($cortissime as $card)
            <li class="card">
                <a href="">
                    <img src="{{ $card['src'] }}" alt="product img">
                    <h3>{{ $card['titolo'] }}</h3>
                    <h4>Vedi prodotto</h4>
                </a>                
            </li>   
        @endforeach
    </ul>
</section>



{{-- <section class="container">
    <ul class="cards">
        @foreach ($cards as $card)
            <li class="card">
                <a href="">
                    <img src="{{ $card['src'] }}" alt="product img">
                    <h3>{{ $card['titolo'] }}</h3>
                    <h4>Vedi prodotto</h4>
                </a>                
            </li>   
        @endforeach
    </ul>
</section> --}}


@endsection
