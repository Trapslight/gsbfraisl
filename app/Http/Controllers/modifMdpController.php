<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modifMdpController extends Controller
{
    public function affFormModifMdp()
    {
        $erreur='';
        return view('formModifMdp','');
    }
    
    public function verifMdp()
    {
        $erreur='';
        $message='';
        return view('formModifMdp.blade.php');
        // récup ex mdp
        
        //verifier mdp saisie = ex mdp
        
        //vérifier les deux mdp
        
        // mettre en bdd
    }
}
?>