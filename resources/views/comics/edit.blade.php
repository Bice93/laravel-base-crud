@extends('layouts.main')

@section('title', 'Form')

@section('main-content')
    <div class="container">
        <div class="row py-4">
            <div class="col-6 offset-md-3">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    @include('comics.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection
