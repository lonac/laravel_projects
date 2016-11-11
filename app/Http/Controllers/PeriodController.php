<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Day;

use App\Church;

use Auth;

use App\Period;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::all();
        return view('periods.create', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO validation is required
        $period = new Period();
        $period->church_id = Church::whereUserId(Auth::user()->id)->first()->id;
        $period->title = $request->input('title');
        $period->slug = str_slug($request->input('title'), '-');
        $period->description = $request->input('description');
        $period->start_time = $request->input('start_time');
        $period->finish_time = $request->input('finish_time');
        if($request->input('published') !== null){
            $period->published = $request->input('published');
        }
        $period->day_id = $request->input('day');
        $period->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $slug)
    {
        $days = Day::all();
        $period = Period::whereId($id)->whereSlug($slug)->first();
        return view('periods.edit', compact('period', 'days'));
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
        // TODO validation is required
        $period = Period::findOrFail($id);
        $period->church_id = Church::whereUserId(Auth::user()->id)->first()->id;
        $period->title = $request->input('title');
        $period->slug = str_slug($request->input('title'), '-');
        $period->description = $request->input('description');
        $period->start_time = $request->input('start_time');
        $period->finish_time = $request->input('finish_time');
        if($request->input('published') !== null){
            $period->published = $request->input('published');
        }
        $period->day_id = $request->input('day');
        $period->save();

        flash()->success('Session updated successfully.');

        return redirect('home');
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
