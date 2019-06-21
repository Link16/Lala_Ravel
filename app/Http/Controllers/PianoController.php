<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;
use App\Role;  

class PianoController extends Controller
{
    // Check connection
    public function __construct() {
        $this->middleware('auth');
    }
    
    // Récupérer et afficher la liste de pianos
    public function getAllPianos() {
        $pianos = Piano::All();
        return view('pianos.get_all_pianos', compact('pianos'));
    }
    
    // Créer une fiche piano    
    public function createPiano() {
        $roles=Role::All();    
        return view('pianos.create_piano', compact('roles'));
    }

    // Enregistrer une fiche piano
    public function storePiano(Request $request) {
        $piano = new Piano([
            'name' => $request->get('name'),
            'mark' => $request->get('mark'),
            'color' => $request->get('color'),
            'model' => $request->get('model'),
        ]);

        $piano->save();

        return redirect('/pianos')->with('success', 'Félicitations! Vous venez de créer une nouvelle fiche "Piano"');;
    }

    public function editPiano($id) {
        $roles=Role::All();
        
        $piano = Piano::find($id);

        return view('pianos.edit_piano', compact('roles', 'piano'));
    }

    public function updatePiano($id, Request $request) {
        $piano = Piano::find($id);

        $piano->name = $request->get('name');
        $piano->mark = $request->get('mark');
        $piano->color = $request->get('color');
        $piano->model = $request->get('model');

        $piano->save();

        return redirect('/pianos')->with('success', 'Bravo! Vous avez modifié la fiche "Piano" avec classe!');
    }

    public function deletePiano($id, Request $request) {
        $piano = Piano::find($id);

        $piano->delete();

        return redirect('/pianos')->with('success', 'Suppression de la fiche "Piano" effectuée!');
    }
}