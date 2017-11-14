<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modifMdpController extends Controller
{
    public function affFormModifMdp()
    {
        $erreur='';
        return view('formModifMdp', compact('erreur'));
    }
    
    public function verifMdp()
    {
        $erreur='';
        return redirect()->back()->with('status','Mise à jour Done !!!');
        // récup ex mdp
        
        //verifier mdp saisie = ex mdp
        
        //vérifier les deux mdp
        
        // mettre en bdd
    }
}
?>