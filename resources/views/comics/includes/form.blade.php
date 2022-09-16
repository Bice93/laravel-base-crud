<div class="mb-3">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title', $comic->title) }}" class="form-control" id="input-title">
    @error('title')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror

</div>

<div class="mb-3">
    <label for="input-series" class="form-label">Series</label>
    <input type="text" name="series" value="{{ old('series', $comic->series) }}" class="form-control"
        id="input-series">
    @error('series')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="input-type" class="form-label">Type</label>
    {{-- <input type="text" name="type" value="{{ $comic->type }}" class="form-control" id="input-type"> --}}
    <select class="d-block" name="type" id="input-type">
        @foreach ($types as $type)
            <option value="{{ $type->name_type }}"
                {{ $type->name_type == old('type', $comic->type) ? 'selected' : '' }}>
                {{ ucwords($type->name_type) }}
            </option>
        @endforeach
    </select>
    @error('type')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="textarea-description" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="textarea-description">
        {{ old('description', $comic->description) }}
    </textarea>
    @error('description')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="input-image" class="form-label">Image</label>
    <input type="text" name="image_url" value="{{ old('image_url', $comic->image_url) }}" class="form-control"
        id="input-image">
    @error('image_url')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="input-price" class="form-label">Price</label>
    <input type="text" name="price" value="{{ old('price', $comic->price) }}" class="form-control"
        id="input-price">
    @error('price')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="input-date" class="form-label">Date</label>
    <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" class="form-control"
        id="input-date">
    @error('sale_date')
        <div class="alert alert-danger mt-1 w-50 style_error_message">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Edit element</button>
