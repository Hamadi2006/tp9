<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objet;
use App\Models\TypeVente;
use App\Models\Ville;
class ObjectController extends Controller
{
public function index(Request $request)
{
    $query = Objet::query();

    $query->when($request->categories, function ($q, $categories) {
        return $q->whereIn('type_vente_id', $categories);
    });

    $query->when($request->villes, function ($q, $villes) {
        return $q->whereIn('ville_id', $villes);
    });

    $query->when($request->min_price, fn($q, $min) => $q->where('prix_min', '>=', $min));
    $query->when($request->max_price, fn($q, $max) => $q->where('prix_max', '<=', $max));

    $sort = $request->get('sort', 'date_asc'); 
    
    switch ($sort) {
        case 'date_desc': $query->orderBy('date_enchere', 'desc'); break;
        case 'prix_asc':  $query->orderBy('prix_min', 'asc'); break;
        case 'prix_desc': $query->orderBy('prix_min', 'desc'); break;
        default:          $query->orderBy('date_enchere', 'asc'); break;
    }

    $objets = $query->get();
    
    $categories = TypeVente::all();
    $villes = Ville::all();

    return view('layouts.app', compact('objets', 'categories', 'villes'));
}
public function search(Request $request)
{
    $term = $request->get('term');
    
    if (empty($term)) {
        return response()->json([]);
    }

    $objets = Objet::where('titre', 'LIKE', "%{$term}%")
                ->orWhere('lot', 'LIKE', "%{$term}%")
                ->take(6)
                ->get(['lot', 'titre', 'prix_min']); 

    return response()->json($objets);
}

}
