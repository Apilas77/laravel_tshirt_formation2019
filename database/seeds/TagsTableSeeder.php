<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new \App\Tag();
        $tag->nom = '#humour';
        $tag->save();

        $tag = new \App\Tag();
        $tag->nom ='#jaune';
        $tag->save();

        $tag = new \App\Tag();
        $tag->nom ='#vert';
        $tag->save();
    }
}
