@extends("layouts.master")

@section('title')
    {{ $comic['title'] }} - Dettaglio Fumetto
@endsection

@section('content')

    <!-- Jumbo -->
    <div class="jumbodiv">
        <img class="jumbo" src="{{ Vite::asset('../config/assets/img/jumbotron.jpg') }}" alt="DC Logo">
    </div>


    <!-- Background -->
    <div class="backgroundComics py-5">
        <div class="container">

            <!-- Return Button -->
            <div class="mb-4">
                <a href="{{ url('/') }}" class="btn btn-secondary">
                    Torna alla lista
                </a>
            </div>


            <!-- Card img -->
            <div class="row align-items-center bg-white p-4 rounded shadow-sm">

                <div class="col-md-4 text-center">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
                </div>

                <!-- Card info -->
                <div class="col-md-8">
                    <h1 class="fw-bold mb-3">{{ $comic['title'] }}</h1>

                    <div class="badge bg-success mb-3 p-2 fs-6">
                        Prezzo: {{ $comic['price'] }}
                    </div>

                    <p class="text-muted lead">{{ $comic['description'] }}</p>

                    <hr class="my-4">

                    <ul class="list-unstyled">
                        <li><strong>Serie:</strong> {{ $comic['series'] }}</li>
                        <li><strong>Data di uscita:</strong> {{ $comic['sale_date'] }}</li>
                        <li><strong>Tipo:</strong> {{ $comic['type'] }}</li>
                    </ul>

                    <strong>Autors: </strong>

                    <ul>

                        @foreach ($comic['writers'] as $artist)
                            <li> {{ $artist }} </li>
                        @endforeach
                    </ul>

                    <strong>Writers: </strong>

                    <ul>

                        @foreach ($comic['artists'] as $artist)
                            <li> {{ $artist }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection