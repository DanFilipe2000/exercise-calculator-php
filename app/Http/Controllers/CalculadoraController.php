<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }

    public function calcular(Request $request) {
        $num1 = $request -> num1;
        $num2 = $request -> num2;
        $operador = $request -> operador;

        $total;

        if ($operador == '+') {
            $total = $num1 + $num2;
        } elseif ($operador == '-') {
            $total = $num1 - $num2;
        } elseif ($operador == '*') {
            $total = $num1 * $num2;
        } else {
            $total = $num1 / $num2;
        }

        return view('calcular', compact('total'));
    }
}
