@extends('layouts.main')

@section('title', 'Comic:' . $comic->title)

@section('main-content')
    <div class="container">
        <div class="row py-5">
            <div class="card p-0">
                <div class="row g-0">
                  <div class="col-md-4 box-image-card">
                    <img src="{{ $comic->image_url }}" class="rounded-start" alt="{{ $comic->title }}'s image">
                  </div>
                  <div class="col-md-8 box-info-card">
                    <div class="card-body">
                      <h4 class="card-title">{{ $comic->title }}</h4>
                      <h6 class="card-title">{{ $comic->series }}</h6>
                      <h6 class="card-title"><span class="fw-normal">Genere:</span> {{ $comic->type }}</h6>
                      <p class="card-text"> {{ $comic->description }}</p>
                      <p class="card-text"><span class="fw-normal">Pubblicazione:</span> {{ $comic->sale_date }}</p>
                      <p class="card-text"><small class="text-muted">€ {{ $comic->price }}</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection