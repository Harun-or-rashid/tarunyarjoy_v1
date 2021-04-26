<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storedd(Request $request)
    {
//        dd($request);
        $data= $this->validate($request,[
            'name'=>'required',
            'image'=>'required|image|max:5000'
        ]);
//       if ($request->ajax()){
//           $image=$request->image;
//           $image_array_1=explode(";",$image);
//           $image_array_2=explode(";",$image_array_1[1]);
//           $data=base64_decode($image_array_2[1]);
//           $image_name=time().'.png';
//           $upload_path=public_path('images'.$image_name);
//           file_put_contents($upload_path,$data);
//           return response().json(['path'=>'images'.$image_name]);
//       }
        $image=$request->file('image');
//                dd($image);
        $image_name=rand().'.'.$image->getClientOriginalExtension();
//        $images=Image::make($image)->fit(300,300);
//        $image_name=$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('images'),$image_name);

        Varsity::create($data);
        return redirect()->back();

    }

    public function index()
    {
        $user=User::all();

        return view('backend.user.list',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd("hh");
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'nid'=>'required',
           'password'=>'required',
            'image'=>'required|file|image',

        ]);

       $data=[
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'nid'=>$request->nid,
           'password'=>bcrypt($request->password),
       ];

       /*Image Upload */

//First of all config->filesystem.php->Deafult='Public'->
 /* 'public' => [
            'driver' => 'local',
            'root' => public_path('uploads'),
            'url' => env('APP_URL').'/uploads',
            'visibility' => 'public',
        ],*/

        if (request()->hasFile('image')){/**/
            if ($request->file('image')) {//**
//                    $extension = $request->image->getClientOriginalExtension();
                $fileName=$request->image->getClientOriginalName();
                $path =  $request->image->move(public_path('uploads/users'), $fileName);
//***
                $data['image']=$fileName;
            }
        }

        User::create($data);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $data=User::find($user);

        return view('backend.user.show')->with('person',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);


        return view('backend.user.edit')->with('users',$user);

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
