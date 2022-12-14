@extends('layouts.main')

@section('title', 'Main comics')

@section('main-content')
    <div class="container">
        <div class="row py-4">
            @if (session('delete'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Deleted!</h4>
                    <hr>
                    <p class="mb-0"> {{ session('delete') }} has been removed!</p>
                </div>
            @endif
            <div class="box_table">
                <table class="table style_table">
                    <thead>
                        <th>ID</th>
                        <th colspan="3">Title</th>
                        <th>Series</th>
                        <th>Type</th>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse ($comics as $comic)
                            <tr>
                                <td>{{ $comic->id }}</td>
                                <td colspan="3"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                                </td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
                                    <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td>Non sono disponibili fumetti da visualizzare!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
