<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function cidade($estado_id)
    {
        $cidade = Cidade::where('estado_id', $estado_id)->get();
        return response()->json($cidade);
    }

    public function estados()
    {
        $estados = Estado::all();
        return response()->json($estados);
    }
}
