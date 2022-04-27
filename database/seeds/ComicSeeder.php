<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $elemnet) {
            
            $comic = new Comic();

            $comic->title = $elemnet['title'];
            $comic->description = $elemnet['description'];
            $comic->thumb = $elemnet['thumb'];
            $comic->price = $elemnet['price'];
            $comic->series = $elemnet['series'];
            $comic->sale_date = $elemnet['sale_date'];
            $comic->type = $elemnet['type'];

            $comic->save();
        }
    }
}
