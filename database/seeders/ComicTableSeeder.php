<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        
        foreach ($comics as $key => $value) {
            $newComic = new Comic();
            $newComic->title = $value['title'];
            $newComic->description = $value['description'];
            $newComic->thumb = $value['thumb'];
            $newComic->price = $value['price'];
            $newComic->series = $value['series'];
            $newComic->sale_date = $value['sale_date'];
            $newComic->type = $value['type'];
            $newComic->artists = $value['artists'];
            $newComic->writers = $value['writers'];

            $newComic->save();
        }
    }
}
