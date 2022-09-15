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
                        <input type="text" placeholder="Insert the title of the comic..." name="title" class="form-control" id="input-title" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" placeholder="Insert the series of the comic..." name="series" class="form-control" id="input-series" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" id="input-type" required>
                    </div>

                    <div class="mb-3">
                        <label for="textarea-description" class="form-label">Description</label>
                        <textarea type="text" placeholder="Insert the description of the comic..." rows="7" name="description" class="form-control" id="textarea-description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-image" class="form-label">Image</label>
                        <input type="text"  name="image_url" class="form-control" id="input-image" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" placeholder="Insert the price of the comic..." name="price" class="form-control" id="input-price" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-date" class="form-label">Date</label>
                        <input type="date" name="sale_date" class="form-control" id="input-date" required>
                    </div>

                    <div class="col-4 offset-md-4 text-center">
                        <button type="submit" class="btn btn-sm btn-secondary">Add new element</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
