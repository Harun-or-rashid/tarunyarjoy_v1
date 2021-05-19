<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.profile', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'nid' => 'required|string|unique:users,nid,' . $user->id,
            'phone' => 'required|string',
            'email' => 'required|string|unique:users,email,' . $user->id,
            'image' => 'nullable|file',
        ]);

        $data = [
            "name" => $request->name,
            "nid" => $request->nid,
            "email" => $request->email,
            "phone" => $request->phone,
        ];

        if ($request->hasFile('image')) {
            if (Storage::disk("local")->exists($user->image)) {
                Storage::disk("local")->delete($user->image);
            }
            $data['image'] = Storage::disk("local")->put("uploads\\users\\images", $request->image);
        }

        $user->fill($data);

        if ($user->save()) {
            return back()->with('success', 'Profile updated successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request, User $user)
    {
        $this->validate($request, [
            "password" => "required|string|min:8|max:25|confirmed",
        ]);

        $data = [
            "password" => bcrypt($request->password),
        ];

        if ($user->update($data)) {
            return back()->with('success', 'User password changed successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }
}
