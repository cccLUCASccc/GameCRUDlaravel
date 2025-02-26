<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jeux;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JeuxController extends Controller
{

    public function index(){
        $jeux = Jeux::paginate(5);
        return view('Jeux', ['jeux' => $jeux]);
    }

    public function details($id){
        $jeu = Jeux::where('id', $id)->first();
        $createur = User::where('id', $jeu->createur_id)->first();
        return view('Details', ['jeu'=>$jeu, 'createur' => $createur]);
    }

    public function delete($id){
        $jeu = Jeux::findOrFail($id);
        $jeu->delete();
        return redirect()->route('Jeux');
    }

    public function show($id){
        $jeu = Jeux::where('id', $id)->first();
        return view('Modify', ['jeu'=>$jeu]);
    }

    public function modify($id){
        $validatedData = request()->validate([
            'name' => ['required', 'min:3'],
            'producteur' => ['required', 'min:3'],
            'release_year' => ['required']
        ]);
        $jeu = Jeux::findOrFail($id);
        $jeu->update($validatedData);
        return redirect()->route('Jeux');
    }

    public function create(){

        $validate = request()->validate([
            'name' => ["required"],
            'producteur' => ["required"],
            'release_year' => ["required"]
        ]);

        $validate['createur_id'] = Auth::id();

        Jeux::create($validate);
        return redirect()->route('Jeux');
    }

}
