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
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="mb-3">
                        <label for="input-title" class="form-label">Title</label>
                        <input type="text" name="title" value="{{ $comic->title }}" class="form-control" id="input-title">
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" name="series" value="{{ $comic->series }}" class="form-control" id="input-series">
                    </div>

                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        {{-- <input type="text" name="type" value="{{ $comic->type }}" class="form-control" id="input-type"> --}}
                        <select class="d-block" name="type" id="input-type">
                            @foreach ($types as $type)
                                <option value="{{ $type->name_type }}" {{ $type->name_type == $comic->type ? 'selected' : '' }}>
                                    {{ ucwords($type->name_type) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="textarea-description" class="form-label">Description</label>
                        <textarea type="text" name="description" class="form-control" id="textarea-description">
                            {{ $comic->description }}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-image" class="form-label">Image</label>
                        <input type="text" name="image_url" value="{{ $comic->image_url }}" class="form-control" id="input-image">
                    </div>

                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" name="price" value="{{ $comic->price }}" class="form-control" id="input-price">
                    </div>

                    <div class="mb-3">
                        <label for="input-date" class="form-label">Date</label>
                        <input type="date" name="sale_date" value="{{ $comic->sale_date }}" class="form-control" id="input-date">
                    </div>

                    <button type="submit" class="btn btn-primary">Edit element</button>
                </form>
            </div>
        </div>
    </div>
@endsection
