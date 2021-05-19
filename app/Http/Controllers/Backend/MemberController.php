<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::role('Donor')->where('status', 1)->get();
        return view('backend.member.index', [
            'members' => $members
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.member.show', [
            'member' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function accept(User $user)
    {
        $user->assignRole('Volunteer');
        if ($user->update(['status' => 0])) {
            return back()->with('success', 'Donor make volunteer successfully');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function reject(User $user)
    {
        if ($user->update(['status' => 0])) {
            return back()->with('success', 'Request rejected successfully');
        }
        return back()->with('error', 'Something went wrong!');
    }
}
