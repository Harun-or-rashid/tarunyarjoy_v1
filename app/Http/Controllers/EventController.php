<?php

namespace App\Http\Controllers;

use GuzzleHttp;
use App\Models\Event;
//use App\Http;
use http\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Mockery\Exception;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("ff");
        return view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://thefoodstore.app/api/v1/stores');
        $data = $res->getBody()->getContents();
        $r = json_decode($data);
        // dd($r->data);
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //      dd($request);  //
        try {
            $validation = $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'time' => 'required',
                'place' => 'required',
                'image' => 'required|file|image'
            ]);

            if (request()->hasFile('image')) {/**/
                if ($request->file('image')) { //**
                    //                    $extension = $request->image->getClientOriginalExtension();
                    $fileName = $request->image->getClientOriginalName();
                    $path =  $request->image->move(public_path('uploads/events'), $fileName);
                    //***
                    $data['image'] = $fileName;
                }
            }
            $eventdata = [
                'title' => $request->title,
                'description' => $request->description,
                'time' => $request->time,
                'place' => $request->place,
                'image' => $fileName
            ];
            //            dd($eventdata);
            Event::create($eventdata);
            return   redirect()->back();
        } catch (Exception $e) {
            return  redirect()->back();
        }
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
