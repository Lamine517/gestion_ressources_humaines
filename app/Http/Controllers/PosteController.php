<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;
use DataTables;

class PosteController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Poste::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admins.postes.index');
    }

    public function create()
    {
        return view('admins.postes.create');
    }
}
