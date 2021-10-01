<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use DataTables;

class CvController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Cv::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        rreturn view('users.cv.index');
    }
  
    public function create()
    {
        return view('users.cv.create');
    }
}
