<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit = new \App\Produit();
        $produit->nom = "T-Shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "T-Shirt Star trek";
        $produit->prix_ht = 23;
        $produit->description = "T-Shirt du film Star trek";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->categorie_id = 1;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "T-Shirt Hulk";
        $produit->prix_ht = 20;
        $produit->description = "T-Shirt du film Hulk";
        $produit->photo_principale = "hulk.jpg";
        $produit->categorie_id = 2;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "T-Shirt Wonder woman";
        $produit->prix_ht = 27;
        $produit->description = "T-Shirt du film Wonder woman";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->categorie_id = 2;
        $produit->save();

        $produit = new \App\Produit();
        $produit->nom = "T-Shirt Simpson";
        $produit->prix_ht = 27;
        $produit->description = "T-Shirt de la série animé Simpson";
        $produit->photo_principale = "simpsons.jpg";
        $produit->categorie_id = 2;
        $produit->save();
    }
}
