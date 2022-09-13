@extends('layouts.main')

@section('title', 'Main comics')

@section('main-content')
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="table-light">
                    <th>ID</th>
                    <th colspan="3">Title</th>
                    <th>Series</th>
                    <th>Type</th>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td colspan="3"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
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
@endsection
