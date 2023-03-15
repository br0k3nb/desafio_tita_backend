<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller {
    public function post(Request $req) {
        $parametros = $req -> all();

        $valorTotal = 0;

        foreach($parametros as $valores) $valorTotal += $valores;
        
        foreach($parametros as $chaves => $valores) {
            $calculo = $valores * 360 / $valorTotal;

            $parametros[$chaves] = (float)number_format($calculo, 2, '.', "");
        }
        
        return response() -> json($parametros);
    }
}
