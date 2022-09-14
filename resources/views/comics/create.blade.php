@extends('layouts.main')

@section('title', 'Form')

@section('main-content')
    <div class="container">
        <div class="row py-4">
            <div class="col-6 offset-md-3">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="input-title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="input-title">
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" name="series" class="form-control" id="input-series">
                    </div>

                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" id="input-type">
                    </div>

                    <div class="mb-3">
                        <label for="textarea-description" class="form-label">Description</label>
                        <textarea type="text" name="description" class="form-control" id="textarea-description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-image" class="form-label">Image</label>
                        <input type="text" name="image_url" class="form-control" id="input-image">
                    </div>

                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="input-price">
                    </div>

                    <div class="mb-3">
                        <label for="input-date" class="form-label">Date</label>
                        <input type="date" name="sale_date" class="form-control" id="input-date">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
