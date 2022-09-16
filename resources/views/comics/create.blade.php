@extends('layouts.main')

@section('title', 'Form')

@section('main-content')
    <div class="container">
        <div class="row py-4">
            <div class="col-6 offset-md-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    @include('comics.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection
