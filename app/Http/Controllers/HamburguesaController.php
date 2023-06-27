<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamburguesa;
class HamburguesaController extends Controller
{
    public function Listar(Request $request){
        return Hamburguesa::all();
    }

    public function Crear(Request $request){
        
        $h = new Hamburguesa();
        $h -> nombre = $request -> post("nombre");
        $h -> precio = $request -> post("precio");

        $h -> save();

        return $h;
    }

}
