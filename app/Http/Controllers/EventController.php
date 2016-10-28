<?php

namespace App\Http\Controllers;

use App\Church;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('church')->paginate(20);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'time' => 'date'
        ]);
        $church = Church::whereUserId(Auth::user()->id)->firstOrFail();
        $event = new Event();
        $event->church_id = $church->id;
        $event->title = $request->input('title');
        $event->slug = str_slug($request->input('title'), '-');
        $event->description = $request->input('description');
        $event->time = $request->input('time');
        $event->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $event = Event::with('church')->findOrFail($id);
        $events = Event::whereChurchId($event->id)->get();
        return view('events.show', compact('event', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $slug)
    {
        // find the event
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'time' => 'required',
        ]);
        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->slug = str_slug($request->input('title'), '-');
        $event->description = $request->input('description');
        $event->time = $request->input('time');
        $event->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Event $event
     * @return \Illuminate\Http\Response
     * @internal param Task $task
     * @internal param int $id
     */
    public function destroy(Request $request, Event $event)
    {
        $this->authorize('destroy', $event);

        $event->delete();

        return redirect('home');
    }
}
