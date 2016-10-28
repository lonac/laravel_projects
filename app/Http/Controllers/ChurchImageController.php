<?php

namespace App\Http\Controllers;

use App\Church;
use App\ChurchImage;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ChurchImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $images = ChurchImage::with('church')->whereChurchId($id)->get();
        return view('church-photos.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('church-images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // load the church
        $church = Church::whereUserId(Auth::user()->id)->first();
        // validate
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(public_path('images/churches/' . $church->id), $imagePath);

        ChurchImage::create([
            'church_id' => $church->id,
            'url' => $imagePath,
            'description' => $request->input('description'),
        ]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function makeFeatured($id)
    {
        $image = ChurchImage::with('church')->findOrFail($id);

        $image->save();

        flash('Church featured photo set successfully');

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
