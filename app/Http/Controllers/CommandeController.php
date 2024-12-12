<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    function liste() {
        return response()->json(Commande::all());
    }

    function ajouter(Request $request){
        $idClient = $request->idClient;
        $idProduit = $request->idProduit;
        $commande = new Commande();
        $commande->id_client = $idClient;
        $commande->id_produit = $idProduit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->save();
        return response()->json($commande);
    }

    function listeClient() {
        return response()->json(Client::all());
    }
}
