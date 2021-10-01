<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bulletin;
use DataTables;

class BulletinController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Bulletin::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admins.bulletin.index');
    }

    public function create()
    {
        return view('admins.bulletin.create');
    }
}
