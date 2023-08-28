<?php

namespace App\Http\Controllers;

use App\Models\Prestataires;
use Illuminate\Http\Request;

class PrestatairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestataire=Prestataires::all();
        if($prestataire!= Null){
            return $prestataire;
        }else{
            return response()->json([
                'message'=>'aucune prestataire enregistre'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'pays'=>'required',
            'quartier'=>'required',
            'ville'=>'required',
            'categorie'=>'required',
            'scanner'=>'required',
            'photo'=>'required',
            'cni'=>'required',
            'description'=>'required',
            'code'=>'required',
            'parrain'=>'required',
            'statut'=>'required',
            'dateCreation'=>'required',
            

        ],
    [
        'cni'=>'veillez remplire tout les champs',
    ]
);
        $prestataire= new Prestataires;
  
        $prestataire->nom = $request->nom;
        $prestataire->email = $request->email;
        $prestataire->phone = $request->phone;
        $prestataire->pays = $request->pays;
        $prestataire->ville = $request->ville;
        $prestataire->quartier = $request->quartier;
        $prestataire->categorie = $request->categorie;
        $prestataire->scanner = $request->scanner;
        $prestataire->photo = $request->photo;
        $prestataire->cni = $request->cni;
        $prestataire->description = $request->description;
        $prestataire->code = $request->code;
        $prestataire->parrain = $request->parrain;
        $prestataire->statut = $request->statut;
        $prestataire->dateCreation = $request->dateCreation;
        $prestataire->save();
        return response()->json([
            'message'=>'prestataire cree avec succes'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestataires $prestataires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestataires $prestataires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestataires $prestataires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestataires $prestataires)
    {
        //
    }
}
