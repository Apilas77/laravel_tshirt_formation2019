<?php

namespace App\Http\Controllers\Backend;

use App\Categorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    // ajouter une catégorie
    public function add() {
        $categories = Categorie::where('parent_id','=',null)->get();
        return view('backend.categories.add',['categories'=>$categories]);
    }

    // Stocker la catégorie dans la DB
    public function store(Request $request) {
        // Validation du form
        $request->validate([
            'nom'=> 'required | max:255'
        ]);
        // Création de l'objet
        $categorie = new Categorie();
        $categorie->nom = $request->nom;
        $categorie->parent_id = $request->parent_id;
        if ($request->is_online == 1) {
            $categorie->is_online = $request->is_online;
        } else {
            $categorie->is_online = false;
        }

        // Sauvergarde dans la DB
        $categorie->save();
        // redirection vers la page qui liste les tags
        return redirect()->route('backend_tags_index')->with
        ('notice','la catégorie <strong>'.$categorie->nom.'</strong> a bien été ajouté.');
    }

    // Afficher le formulaire de modification
    public function edit (Request $request) {
        $categorie = Categorie::find($request->id);
        $categories = Categorie::where('parent_id','=',null)->get();
        return view('backend.categories.edit',['categorie'=>$categorie,'categories'=>$categories]);
    }

    // Stocker la modification dans la DB
    public function update(Request $request) {
        $categorie = Categorie::find($request->id);
        // Validation du form
        $request->validate([
            'nom'=> 'required | max:255'
        ]);
        $categorie->nom = $request->nom;
        $categorie->parent_id = $request->parent_id;
        if ($request->is_online == 1) {
            $categorie->is_online = $request->is_online;
        } else {
            $categorie->is_online = false;
        }
        $categorie->save();

        return redirect()->route('backend_tags_index')
            ->with('notice','La catégorie <strong>'.$categorie->nom.'</strong> a été modifiée');
    }

    public function delete (Request $request) {
        $categorie = Categorie::find($request->id);
        $categorie->delete();
        return redirect()->route('backend_tags_index')
            ->with('notice','La catégorie <strong>'.$categorie->nom.'</strong> a bien été supprimé');
    }
}
