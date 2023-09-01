<?php

namespace App\Http\Controllers;

use App\Models\Vendeurs;
use Illuminate\Http\Request;

class VendeursController extends Controller
{
    /**
     * Fonction qui permet de lister tous les vendeurs
     */
    public function index()
    {
        return Vendeurs::all();
    }

    /**
     * Fonction qui permet de creer un nouveau vendeur
     */
    public function create(Vendeurs $vendeurs)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nom' => 'required|max:255', // Champ 'nom' requis avec une longueur maximale de 255 caractères
                'email' => 'required|max:255', // Champ 'email' requis avec une longueur maximale de 255 caractères
                'phone' => 'required|max:255',  // Champ 'phone' requis avec une longueur maximale de 255 caractères
                'pays' => 'required|max:255', // Champ 'pays' requis avec une longueur maximale de 255 caractères
                'lieu' => 'required|max:255', // Champ 'lieu' requis avec une longueur maximale de 255 caractères
                'ville' => 'required|max:255', // Champ 'ville' requis avec une longueur maximale de 255 caractères
                'quartier' => 'required|max:255', // Champ 'quartier' requis avec une longueur maximale de 255 caractères
                'boutique' => 'required|max:255', // Champ 'boutique' requis avec une longueur maximale de 255 caractères
                'code' => 'required|max:255', // Champ 'code' requis avec une longueur maximale de 255 caractères
                'parrain' => 'required|max:255', // Champ 'parrain' requis avec une longueur maximale de 255 caractères
                'status' => 'required|max:255' // Champ 'status' requis avec une longueur maximale de 255 caractères
            ],
            [
                'nom' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'nom'
                'email' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'email'
                'phone' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'phone'
                'pays' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'pays'
                'lieu' => 'required|max:255', // Champ 'lieu' requis avec une longueur maximale de 255 caractères
                'ville' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'passwordvendeur'
                'quartier' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'quartier'
                'boutique' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'boutique'
                'code' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'code'
                'parrain' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'parrain'
                'status' => 'Obligatoire !' // Message d'erreur personnalisé pour le champ 'status'
            ]
        );
        $vendeurs = new Vendeurs(); // on cree un nouveau vendeur
        $vendeurs->nom = $request->nom; // on recupere le nom du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->email = $request->email; // on recupere l'email du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->phone = $request->phone; // on recupere le phone du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->pays = $request->pays; // on recupere le pays du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->lieu = $request->lieu; // on recupere le lieu  du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->ville = $request->ville; // on recupere la ville du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->quartier = $request->quartier; // on recupere le quartier du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->boutique = $request->boutique; // on recupere la boutique du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->code = $request->code; // on recupere le code du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->parrain = $request->parrain; // on recupere le parrain du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
        $vendeurs->status = $request->status; // on recupere le status du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur

        $vendeurs->save(); // puis on sauvegarde tous ca dans notre objet vendeur
        return response()->json([
            'message' => 'Le vendeur est cree avec succes !' // et on envoie un json comme message de succes.
        ]);
    }

    /**
     * fonction qui permet de  rechercher un vendeur
     */
    public function show($id)
    {
        $vendeurs = Vendeurs::findOrFail($id); // recuperation de l'id entrer par l'utilisateur
        if ($vendeurs) { // verifications du vendeur si ca existe dans la base
            return $vendeurs; // envoie du resultat de la recherche avec toutes les infos du vendeur
        } else {
            return response()->json([
                'message' => 'Ce vendeur existe pas' //envoie du resultat de la recherche avec echec
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendeurs $vendeurs)
    {
        //
    }

    /**
     * La fonction qui met a jour un vendeur
     */
    public function update($id, Request $request)
    {
        $request->validate(
            [
                'nom' => 'required|max:255', // Champ 'nom' requis avec une longueur maximale de 255 caractères
                'email' => 'required|max:255', // Champ 'email' requis avec une longueur maximale de 255 caractères
                'phone' => 'required|max:255',  // Champ 'phone' requis avec une longueur maximale de 255 caractères
                'pays' => 'required|max:255', // Champ 'pays' requis avec une longueur maximale de 255 caractères
                'lieu' => 'required|max:255', // Champ 'lieu' requis avec une longueur maximale de 255 caractères
                'ville' => 'required|max:255', // Champ 'ville' requis avec une longueur maximale de 255 caractères
                'quartier' => 'required|max:255', // Champ 'quartier' requis avec une longueur maximale de 255 caractères
                'boutique' => 'required|max:255', // Champ 'boutique' requis avec une longueur maximale de 255 caractères
                'code' => 'required|max:255', // Champ 'code' requis avec une longueur maximale de 255 caractères
                'parrain' => 'required|max:255', // Champ 'parrain' requis avec une longueur maximale de 255 caractères
                'status' => 'required|max:255' // Champ 'status' requis avec une longueur maximale de 255 caractères
            ],
            [
                'nom' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'nom'
                'email' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'email'
                'phone' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'phone'
                'pays' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'pays'
                'lieu' => 'required|max:255', // Champ 'lieu' requis avec une longueur maximale de 255 caractères
                'ville' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'vendeur'
                'quartier' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'quartier'
                'boutique' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'boutique'
                'code' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'code'
                'parrain' => 'Obligatoire !', // Message d'erreur personnalisé pour le champ 'parrain'
                'status' => 'Obligatoire !' // Message d'erreur personnalisé pour le champ 'status'
            ]
        );
        $vendeurs = Vendeurs::findOrFail($id); // recuperation de l'id entrer par l'utilisateur
        if ($vendeurs) { // verifications du vendeur si ca existe dans la base
            $vendeurs->nom = $request->nom; // on recupere le nom du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->email = $request->email; // on recupere l'email du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->phone = $request->phone; // on recupere le phone du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->pays = $request->pays; // on recupere le pays du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->lieu = $request->lieu; // on recupere le lieu  du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->ville = $request->ville; // on recupere la ville du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->quartier = $request->quartier; // on recupere le quartier du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->boutique = $request->boutique; // on recupere la boutique du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->code = $request->code; // on recupere le code du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->parrain = $request->parrain; // on recupere le parrain du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->status = $request->status; // on recupere le status du vendeur qui a ete saisi dans le formulaire puis on l'ajoute dans notre nouveau vendeur
            $vendeurs->update();
            return response()->json([
                'message' => 'Mise a jours effectuee avec succes !'
            ]);
        } else {
            return response()->json([
                'message' => 'Ce vendeur existe pas.'
            ]);
        }
    }
    /**
     * Fonction qui permet de supprimer un vendeur
     */
    public function destroy($id)
    {
        $vendeurs = Vendeurs::findOrFail($id);
        if ($vendeurs) {
            $vendeurs->delete();
            return response()->json([
                'message' => 'Le vendeur est supprimee avec succes !'
            ]);
        } else {
            return response()->json([
                'message' => 'Ce vendeur existe pas.'
            ]);
        }
    }
    /**
     * Fonction qui permet d'activer ou de désactiver un vendeur
     */
    public function toggleActivation($id)
    {
        $vendeurs = Vendeurs::findOrFail($id); 

        if ($vendeurs) {
            $vendeurs->active = !$vendeurs->active; // Inverse la valeur du champ "active"
            $vendeurs->save();
            if ($vendeurs->active==0) {
                return response()->json([
                    'message' => 'Le vendeur est Desactiver.'
                ]);
            }else {
                return response()->json([
                    'message' => 'Le vendeur est Activer.'
                ]);
            }
           
        } else {
            return response()->json([
                'message' => 'Ce vendeur existe pas.'
            ]);
        }
    }
}
