<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Neighborhood;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{

    public function index()
    {
        $neighborhoods = Neighborhood::all();

        return response()->json(['message' => 'Sucesso', 'data' => $neighborhoods], 200);
    }
}
