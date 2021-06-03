<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
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
            'name' => 'required|string',
            'nid' => 'required|string|unique:users,nid',
            'phone' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'role' => 'required|array',
            'role.*' => 'string|exists:roles,name',
            'image' => 'nullable|file',
        ]);

        $data = [
            "name" => $request->name,
            "nid" => $request->nid,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => bcrypt($request->password),
        ];
        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk("local")->put("uploads\\users\\images", $request->image);
        }

        $user = new User($data);
        if ($user->save()) {
            $user->assignRole($request->role);
            $user->createAsStripeCustomer();
            return back()->with('success', 'User created successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // dd($user);
        return view('backend.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'nid' => 'required|string|unique:users,nid,' . $user->id,
            'phone' => 'required|string',
            'email' => 'required|string|unique:users,email,' . $user->id,
            'role' => 'required|array',
            'role.*' => 'required|string|exists:roles,name',
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
        if ($user->update($data)) {
            $user->syncRoles($request->role);
            return back()->with('success', 'User updated successfully!');
        }
        return back()->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Storage::disk("local")->exists($user->image)) {
            Storage::disk("local")->delete($user->image);
        }
        if ($user->delete()) {
            return back()->with('success', 'User deleted successfully!');
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
