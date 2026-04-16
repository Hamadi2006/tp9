<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objet;
class ObjectController extends Controller
{
 public function index(Request $request)
{
    $objets = Objet::query()
        ->when($request->category, function ($query, $categoryId) {
            return $query->where('type_vente_id', $categoryId);
        })
        ->get();

    $categories = \App\Models\TypeVente::all(); 

    return view('layouts.app', compact('objets', 'categories'));
}
}
