<?php

namespace App\Http\Controllers\admin;

use App\Models\Oeuvre;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OeuvreController extends Controller
{
    public function liste()
    {

        $oeuvres =Oeuvre::all();

        return view("admin.oeuvres.list", [
            'oeuvres' => $oeuvres
        ]);
    }

    public function ajouter()
    {
        $categories =Categorie::all();

        return view('admin.oeuvres.create', [

            'categories' => $categories
        ]);
    }

    public function ajouter_traitement(Request $request)
    {

       Oeuvre::create([
            'titre' => $request->titre,
            'artiste' => $request->artiste,
            'annee de fabrication' => $request->annee_de_fabrication,
            'date acquisition' => $request->date_acquisition,
            'prix estime' => $request->prix_estime,
            'categorie_id' => $request->categorie_id,
            'description' => $request->description,
            'photo' => $request->photo,
            'tags' => $request->tags,
            'slug' => Str::slug(date('Y-m-d') . '-' . $request->tags)

        ]);

        return redirect()->route('admin.oeuvres.liste');
    }


    public function modifier($id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $categories = Categorie::all();

        return view('admin.oeuvres.create', [
            'oeuvre' => $oeuvre,
            'categories' => $categories
        ]);
    }

    public function modifier_traitement(Request $request, $id)
    {

        $oeuvre =Oeuvre ::findOrFail($id);

        $oeuvre->update([
            'titre' => $request->titre,
            'artiste' => $request->artiste,
            'annee de fabrication' => $request->annee_de_fabrication,
            'date acquisition' => $request->date_acquisition,
            'prix estime' => $request->prix_estime,
            'categorie_id' => $request->categorie_id,
            'description' => $request->description,
            'photo' => $request->photo,
            'tags' => $request->tags,
            'slug' => Str::slug(date('Y-m-d') . '-' . $request->tags)

        ]);

        return redirect()->route('admin.oeuvres.liste');
    }

    public function supprimer_traitement(Request $request, $id)
    {

        $oeuvre = Oeuvre::findOrFail($id);
        $oeuvre -> delete();
        return redirect()->route('admin.oeuvres.liste');
    }

    public function details()
    {

        return view("admin.oeuvres.show");
    }
}
