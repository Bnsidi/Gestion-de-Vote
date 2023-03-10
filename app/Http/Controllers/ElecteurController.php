<?php

namespace App\Http\Controllers;
use App\Models\Electeur;
use App\Models\Candidat;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidat = Candidat::all();
        
        return view('electeur.ajouter', compact('candidat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $candidat = Candidat::all();
        $electeur = Electeur::paginate(2);


        
        return view('electeur.liste', compact('electeur', 'candidat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $electeur = new Electeur();
        
        $electeur->nom = $request->nom ;
        $electeur->prenom = $request->prenom ;
        $electeur->cni = $request->cni ;
        $electeur->candidat_id = $request->candidat_id ;

        $electeur->save();

        return redirect()->back()->with('success', 'Vote saved');
    }
    //********************************************************************************
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidat = Candidat::all();
        $electeur = Electeur::find($id);
        
        return view('electeur.editer', compact(['electeur','candidat']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $electeur = Electeur::find($id);

        $electeur->nom = $request->nom ;
        $electeur->prenom = $request->prenom ;
        $electeur->cni = $request->cni ;
        $electeur->candidat_id = $request->candidat_id ;

        $electeur->update();

        return redirect()->route('liste.electeur')->with('success', 'electeur updated');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $electeur = Electeur::find($id);
        $electeur->delete();
        return back();
    }
}
