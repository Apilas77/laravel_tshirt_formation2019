<?php

namespace App\Http\Controllers\Shop;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // Afficher la page d'accueil du Shop
    public function index() {
        $produits = Produit::all();
//        dd($produits);
        return view('shop.index',['produits'=>$produits]);
    }

    // Voir les produits d'une catégorie
    public function viewByCategorie(Request $request) {
        $cat = Categorie::find($request->id);
        $produits = $cat->produits;

        return view('shop.categorie',['produits'=>$produits,'cat'=>$cat]);
    }

    // Voir les détails d'un produit
    public function viewProduct(Request $request) {
        $prod = Produit::find($request->id);
        return view('shop.produit',['produit'=>$prod]);
    }

    public function changeSizeAjax (Request $request) {
        // Récupération de l'id de la taille choisie
        $taille_id = $request->taille_id;
        $produit_id = $request->produit_id;

        $produit_taille = DB::table('produit_taille')
            ->where('taille_id',$taille_id)
            ->where('produit_id',$produit_id)
            ->first();

//        dd($produit_taille);
        return view('shop.qte_ajax',['qte'=>$produit_taille->qte]);
    }
}
