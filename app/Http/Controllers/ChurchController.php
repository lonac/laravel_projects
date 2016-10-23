<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Church;

use App\Region;

use App\District;

use App\Category;

class ChurchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $churches = Church::with(['region', 'district', 'category'])->paginate(12);
        return view('churches.index', compact('churches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('churches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('church/region');
    }

    public function region()
    {
        $regions = Region::all();
        return view('churches.region', compact('regions'));
    }

    public function regionStore(Request $request)
    {
       
        return redirect('church/district');
    }

    public function district()
    {
        $districts = District::all();
        return view('churches.district', compact('districts'));
    }

    public function districtStore(Request $request)
    {
        return redirect('church/about');
    }  

    public function about()
    {
        return view('churches.about');
    }  

    public function aboutStore()
    {
        return redirect('church/contact');
    }

    public function contact()
    {
        return view('churches.contact');
    }

    public function contactStore()
    {
        return redirect('church/category');
    }

    public function category()
    {
        $categories = Category::all();
        return view('churches.category', compact('categories'));
    }

    public function categoryStore()
    {
        return redirect('church/other-name');
    }

    public function otherName()
    {
        return view('churches.other-name');
    }

    public function otherNameStore()
    {
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $church = Church::with(['region', 'district', 'phones', 'emails', 'category'])->whereSlug($slug)->first();
        // TODO exclude the current church
        $churches = Church::whereRegionId($church->region->id)->get();
        return view('churches.show', compact('church', 'churches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
