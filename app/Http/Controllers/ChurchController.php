<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Church;

use App\Region;

use App\District;

use App\Category;

use Auth;

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
        
    }

    public function new()
    {
        return view('churches.new');
    }

    public function nameStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:churches|max:255',
        ]);
        $request->session()->put('name', $request->input('name')); 
        return redirect('church/region');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function region()
    {
        $regions = Region::all();
        return view('churches.region', compact('regions'));
    }

    public function regionStore(Request $request)
    {
        $this->validate($request, [
            'region' => 'required', 
        ]);        
        $request->session()->put('region', $request->input('region'));     
        return redirect('church/district');
    }

    public function district()
    {
        $districts = District::all();
        return view('churches.district', compact('districts'));
    }

    public function districtStore(Request $request)
    {
        $this->validate($request, [
            'district' => 'required', 
        ]);        
        $request->session()->put('district', $request->input('district'));         
        return redirect('church/about');
    }  

    public function about()
    {
        return view('churches.about');
    }  

    public function aboutStore(Request $request)
    {
        $this->validate($request, [
            'description' => 'required', 
        ]);        
        $request->session()->put('description', $request->input('description'));          
        return redirect('church/contact');
    }

    public function contact()
    {
        return view('churches.contact');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required', 
            'email' => 'required', 
        ]);        
        $request->session()->put('phone', $request->input('phone'));         
        $request->session()->put('email', $request->input('email'));         
        return redirect('church/category');
    }

    public function category()
    {
        $categories = Category::all();
        return view('churches.category', compact('categories'));
    }

    public function categoryStore(Request $request)
    {
        // $this->validate($request, [
        //     'category' => 'required',
        // ]);        
        $request->session()->put('category', $request->input('category'));         
        return redirect('church/other-name');
    }

    public function otherName()
    {
        return view('churches.other-name');
    }

    public function otherNameStore(Request $request)
    {
        // $this->validate($request, [
        //     'other_name' => 'min:255',
        // ]);    
        $request->session()->put('other_name', $request->input('other_name'));  
        
        $church = new Church();
        $name = $request->session()->pull('name', 'default');
        $church->name = $name;
        $slug = str_slug($name, '-');
        $church->slug = $slug;
        $region = $request->session()->pull('region', 'default');
        $church->region_id = $region;
        $district = $request->session()->pull('district', 'default');
        $church->district_id = $district;
        $description = $request->session()->pull('description', 'default');
        $church->description = $description;
        $address = $request->session()->pull('address', 'default');
        $church->address = $address;
        $category = $request->session()->pull('category', 'default');
        $church->category_id = $category;
        $church->user_id = Auth::user()->id;
        $church->save();

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
