<?php

// app/Http/Controllers/DatasetController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatasetController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter');

        $query = DB::table('breast_cancers');

        if ($filter) {
            $query->where('diagnosis', 'like', '%' . $filter . '%');
        }

        $datasets = $query->get();

        return view('datasets.index', compact('datasets', 'filter'));
    }
}

  