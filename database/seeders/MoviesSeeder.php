<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'judul' => 'The Shawshank Redemption',
            'poster' => 'https://image.tmdb.org/t/p/w200/vDkct38sSFSWJIATlfJw0l3QOIR.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 1994,
            'rating' => 9.8,
        ]);

        Movie::create([
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre_id' => '3',
            'country_id' => '1',
            'tahun' => 1972,
            'rating' => 8.0,
        ]);
    }
}
