<?php

namespace App\Http\Controllers;

use App\Models\ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
   public  function getIngredients()
   {
       return response()->json(ingredient::all(),200);
   }

    public  function addIngredient(Request $request)
    {
        $ingredient= Ingredient::create($request->all());
        return response()->json($ingredient,201);
    }
}
