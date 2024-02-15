@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card bg-dark text-white my-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->original_title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->title }}</h6>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <p class="card-text">{{ $movie->vote }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
