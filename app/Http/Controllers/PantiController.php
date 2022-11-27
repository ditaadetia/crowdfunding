<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panti;

class PantiController extends Controller
{
    public function index(){
        $pantis = Panti::all();
        return view('panti.panti', compact('pantis'));
    }

    public function createPantiIndex(){
        return view('panti.pantiCreateIndex');
    }
    public function createPanti(Request $request){
        Panti::create([
            'nama_panti' => $request->nama_panti,
            'alamat' => $request->alamat
        ]);
        $pantis = Panti::all();
        return view('panti', compact('pantis'));
    }

}
