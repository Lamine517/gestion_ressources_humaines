<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use DataTables;

class EmployeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Employe::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('employes.index');
    }

    public function create()
    {
        return view('employes.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'dateNaiss' => 'required',
            'mariage' => 'required',
            'nbrEnfant' => 'required',
            'lieuNaiss' => 'required',
            'poste' => 'required',
            'service' => 'required',
            'dateEmploi' => 'required',
            'diplome' => 'required',
            'mouvement_id' => 'required',
            'poste_id' => 'required',
            'contrat_id' => 'required',
            'categorie_num' => 'required',
            'bulletin_code' => 'required', 
            
        ]);

    $input = $request->all();

    Employe::create($input);
 
    return redirect()->route('users.user')
                    ->with('success','Recrutement enregistre avec succes');
    }
}
