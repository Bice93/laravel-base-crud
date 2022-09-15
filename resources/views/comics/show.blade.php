@extends('layouts.main')

@section('title', 'Comic:' . $comic->title)

@section('main-content')
    <div class="container">
        <div class="row py-5">
            @if (session('edited'))
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <hr>
                    <p class="mb-0">{{ session('edited') }} has been successfully modified!</p>
                </div>
            @elseif (session('created'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <hr>
                    <p class="mb-0">{{ session('created') }} was successfully created!</p>
                </div>
            @endif
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
                            <p class="card-text d-inline"><small class="text-muted">€ {{ $comic->price }}</small></p>
                            <p class="card-text d-inline float-end slug_style"><small class="text-muted">
                                    {{ $comic->slug }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 offset-md-10 text-end p-0 my-3">
                <a class="btn btn-sm btn-success" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                </form>
            </div>
        </div>
    </div>
@endsection
