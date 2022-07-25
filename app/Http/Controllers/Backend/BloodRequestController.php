<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\BRequestJob;
use App\Models\BloodRequest;
use App\Models\User;


class BloodRequestController extends Controller
{
    public function index()
    {
        $brequests = \App\Models\BloodRequest::with('relAcceptedBy')->get();
        return view('backend.blood.index', compact('brequests'));
    }
    public function requests()
    {
        return view('backend.blood.request');
    }
    public function requestBlood()
    {
        BloodRequest::create([
            'blood_group' => request('blood_group'),
            'phone' => request('phone'),
            'location' => request('location'),
            'needed_date' => request('needed_date'),
            'description' => request('description'),
            'request_by' => auth()->user()->id,
        ]);
        return back()->with('success', 'Blood Request Successfully Sent');
    }
    public function requestBloodDelete($id)
    {
    }
    public function accept(Request $req, $id)
    {
        $brequest = BloodRequest::findOrFail($id);
        $brequest->status = 1;
        $brequest->save();

        $volunteers = User::role('volunteer')->get();

        foreach ($volunteers as $volunteer) {
            $this->dispatch(new BRequestJob($volunteer, $brequest));
        }
        return back()->with('success', 'Blood Request Accepted');
    }
    public function reject(Request $req, $id)
    {
        $brequest = BloodRequest::findOrFail($id);
        $brequest->status = 0;
        $brequest->save();
        return back()->with('success', 'Blood Request Accepted');
    }
    public function comingToDonate(Request $req, $bRequestId, $userId)
    {
        if (!$req->hasValidSignature()) {
            abort(401);
        }
        $brequest = BloodRequest::findOrFail($bRequestId);
        if (!$brequest->accepted_by) {
            $brequest->accepted_by = $userId;
            $brequest->save();
        }
        return redirect()->route('landing')->with('accept-success', 'Thank you for coming to donate');
    }
}
