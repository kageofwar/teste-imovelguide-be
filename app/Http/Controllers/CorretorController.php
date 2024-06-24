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

    public function search($id) {
        $corretor = Corretor::findOrFail($id);

        return $corretor;
    }

    public function store(Request $request) {
        $corretor = new Corretor();

        $corretor->name = $request->name;
        $corretor->cpf = $request->cpf;
        $corretor->creci = $request->creci;

        $corretor->save();
    }

    public function edit(Request $request, $id) {
        $corretor = Corretor::findOrFail($id);

        $corretor->name = $request->name;
        $corretor->cpf = $request->cpf;
        $corretor->creci = $request->creci;

        $corretor->save();
    }

    public function delete($id){
        $corretor = Corretor::findOrFail($id);

        $corretor->delete();
    }
}
