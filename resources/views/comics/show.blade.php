@extends('layouts.main')

@section('title', 'Comic:' . $comic->title)

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ $comic->image_url }}" class="img-fluid rounded-start" alt="{{ $comic->title }}'s image">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h4 class="card-title">{{ $comic->title }}</h4>
                      <h6 class="card-title">{{ $comic->series }}</h6>
                      <h6 class="card-title">Genere: {{ $comic->type }}</h6>
                      <p class="card-text"> {{ $comic->description }}</p>
                      <p class="card-text">Prima pubblicazione: {{ $comic->sale_date }}</p>
                      <p class="card-text"><small class="text-muted">€ {{ $comic->price }}</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection