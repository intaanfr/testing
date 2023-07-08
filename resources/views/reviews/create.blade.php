@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div>
                    <label for="genre">Movie:</label>
                    <select id="genre" name="genre_id">
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="judul">User:</label>
                    <input type="text" id="user" name="user" required>
                </div>
                <div>
                    <label for="poster">Rating:</label>
                    <input type="text" id="rating" name="rating" required>
                </div>

                <div>
                    <label for="negara">Review:</label>
                    <input type="text" id="review" name="review" required>
                </div>
                <div>
                    <label for="tahun">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection