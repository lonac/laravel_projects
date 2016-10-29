<?php

namespace App\Http\Controllers;

use App\Church;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)

    {
        $churches = Church::where('name', 'like', '%' . $request->input('q') . '%')->paginate(12);
        return view('search', compact('churches'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function autocomplete(Request $request)

    {
        $data = Church::select("name")->where("name", "LIKE", "%{$request->input('query')}%")->get();
        return response()->json($data);
    }
}
