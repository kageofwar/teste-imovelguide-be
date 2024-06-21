<?php

namespace App\Http\Controllers;

use App\Models\Corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{
    public function index() {
        $corretores = Corretor::all();

        return $corretores;
    }

    public function store(Request $request) {
        $corretor = new Corretor();

        $corretor->name = $request->name;
        $corretor->cpf = $request->cpf;
        $corretor->creci = $request->creci;

        $corretor->save();
    }
}
