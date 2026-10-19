@extends("layouts.master")

@php
    $comics = config("comics")
@endphp


@section('title')
    Laravel Comics
@endsection

    <!-- Jumbo -->
@section('content')
    <div class="jumbodiv">
        <img class="jumbo" src="{{ Vite::asset('../config/assets/img/jumbotron.jpg') }}" alt="DC Logo">
    </div>

    <div class="backgroundComics">

        <div class="container">

            <div class="series">
                <h2>CURRENT SERIES</h2>
            </div>

            <!-- Card Deck -->
            <div class="card-deck">
                @foreach ($comics as $id => $comic)
                    <a href="{{ route('comicDetail', ['id' => $id]) }}" class="text-decoration-none text-dark">
                        <x-card :comic="$comic">
                            <h5> {{ $comic['title'] }} </h5>
                        </x-card>
                    </a>
                @endforeach
            </div>
            <!-- Button Load More -->
            <button class="loadMore">
                LOAD MORE
            </button>
        </div>
    </div>


    <!-- Blue Banner -->
    <div class="blueBar">
        <ul class="ulBlue">
            <li>
                <img src="{{ Vite::asset('../config/assets/img/buy-comics-digital-comics.png') }}" alt="buy-comics">
                <span> DIGITAL COMICS </span>
            </li>
            <li>
                <img src="{{ Vite::asset('../config/assets/img/buy-comics-merchandise.png') }}" alt="buy-comics">
                <span> DC MERCHANDISE </span>
            </li>
            <li>
                <img src="{{ Vite::asset('../config/assets/img/buy-comics-subscriptions.png') }}" alt="buy-comics">
                <span> SUBSCRIPTION </span>
            </li>
            <li>
                <img src="{{ Vite::asset('../config/assets/img/buy-comics-shop-locator.png') }}" alt="buy-comics">
                <span> COMIC SHOP LOCATOR </span>
            </li>
            <li>
                <img src="{{ Vite::asset('../config/assets/img/buy-dc-power-visa.svg') }}" alt="buy-comics">
                <span> DC POWER VISA </span>
            </li>
        </ul>
    </div>



@endsection