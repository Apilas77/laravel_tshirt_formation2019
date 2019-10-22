<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categorie = new \App\Categorie();
        $categorie->nom = "Films";
        $categorie->save();

        $categorie2 = new \App\Categorie();
        $categorie2->nom = "Series TV";
        $categorie2->save();

        $categorie3 = new \App\Categorie();
        $categorie3->nom = "Musique";
        $categorie3->save();

        $categorie4 = new \App\Categorie();
        $categorie4->nom = "Jeux-Vidéo";
        $categorie4->save();

        $categorie5 = new \App\Categorie();
        $categorie5->nom = "Sport";
        $categorie5->save();
    }
}
