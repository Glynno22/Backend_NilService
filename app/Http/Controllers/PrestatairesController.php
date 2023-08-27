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
        $prestataite=Prestataite::all();
        if($prestataite!= Null){
            return $prestataite;
        }else{
            return response()->json([
                'message'=>'aucune prestataite enregistre'
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
        //
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
