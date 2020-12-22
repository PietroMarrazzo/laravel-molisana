@extends('layouts.main')

@section('content')

<h1>HOMEPAGE</h1>

<h3>Benvenuto {{ $user }}</h3>


{{-- section products --}}




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
