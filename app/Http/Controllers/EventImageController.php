<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventImage;
use Illuminate\Http\Request;

use App\Http\Requests;

class EventImageController extends Controller
{
    public function store(Request $request)
    {
        // load the event
        $event = Event::findOrFail($request->input('event'));
        // validate
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(public_path('images/events/' . $event->id), $imagePath);

        EventImage::create([
            'event_id' => $event->id,
            'url' => $imagePath,
            'description' => $request->input('description'),
        ]);

        return redirect('home');
    }
}
