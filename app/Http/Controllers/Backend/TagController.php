<?php

namespace App\Http\Controllers\Backend;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Lister les tags
    public function index () {
        $tags = Tag::all();
        $categories = Categorie::where('parent_id','=',null)->paginate(5);
        return view('backend.tag.index',
            ['tags'=>$tags,'categories'=>$categories]);
    }

    // Ajouter un tag
    public function add() {
        return view('backend.tag.add');
    }

    //Stocker un tag dans la DB
    public function store(Request $request) {
        // Validation du form
        $request->validate([
            'nom'=> 'required | max:255'
        ]);
        // Création de l'objet Tab
        $tag = new Tag();
        $tag->nom = $request->nom;
        // Sauvergarde dans la DB
        $tag->save();
        // redirection vers la page qui liste les tags
        return redirect()->route('backend_tags_index')->with
        ('notice','le tag'.$tag->nom.' a bien été ajouté.');
    }

    public function edit(Request $request) {
        // Récupérer dans la DB le tag à modifier (on récupère le paramètre du tag via l'URI définie dans la route)
        $tag = Tag::find($request->id);
        return view('backend.tag.edit',['tag'=>$tag]);
    }

    // Exécution de la modif
    public function update(Request $request) {
        $request->validate([
            'nom'=>'required|max:255'
        ]);
        $tag = Tag::find($request->id);
        $tag->nom = $request->nom;
        $tag->save();
        return redirect()->route('backend_tags_index')
            ->with('notice','Le tag <strong>'.$tag->nom.'</strong> a été modifié');


    }

    public function delete(Request $request) {
        $tag = Tag::find($request->id);
        $tag->delete();
        return redirect()->route('backend_tags_index')
            ->with('notice','Le tag<strong>'.$tag->nom.'</strong> a été suprrimé');
    }
}
