<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'place' => 'required|string',
            'image' => 'required|file|image',
            'time' => 'required|date_format:H:i',
            'event_date' => 'required|date',
        ]);
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "place" => $request->place,
            "time" => $request->time,
            "event_date" => $request->event_date,
        ];
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk("local")->put("uploads\\events\\images", $request->image);
        }

        $event = new Event($data);
        if ($event->save()) {
            return back()->with('success', 'Event created successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('backend.events.show', [
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('backend.events.edit', [
            'event' => $event,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'place' => 'required|string',
            'image' => 'nullable|file|image',
            'time' => 'required|date_format:H:i',
            'event_date' => 'required|date',
        ]);
        $data = [
            "title" => $request->title,
            "description" => $request->description,
            "place" => $request->place,
            "time" => $request->time,
            "event_date" => $request->event_date,
        ];

        if ($request->hasFile('image')) {
            if (Storage::disk("local")->exists($event->image)) {
                Storage::disk("local")->delete($event->image);
            }
            $data['image'] = Storage::disk("local")->put("uploads\\events\\images", $request->image);
        }

        $event->fill($data);
        if ($event->save()) {
            return back()->with('success', 'Event updated successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if (Storage::disk("local")->exists($event->image)) {
            Storage::disk("local")->delete($event->image);
        }
        if ($event->delete()) {
            return back()->with('success', 'Event deleted successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }
}
