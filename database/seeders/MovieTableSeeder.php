<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('comics');
        foreach($movies as $movie){
            $new_Movie = new Movie();
            $new_Movie->title = $movie['title'];
            $new_Movie->description = $movie['description'];
            $new_Movie->thumb = $movie['thumb'];
            $new_Movie->price = $movie['price'];
            $new_Movie->series = $movie['series'];
            $new_Movie->sale_date = $movie['sale_date'];
            $new_Movie->type = $movie['type'];
            $new_Movie->artists = implode('|' , $movie['artists']);
            $new_Movie->writers = implode('|' , $movie['writers']);
            $new_Movie->save();

        }
    }
}
