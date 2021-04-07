@extends('backend.master')
@section('main_content')
    <a style="color: red" href="/logout">Logout</a>
        <table class="table text-purple table-bordered table-hover">
            <tr>
                <th style="font-size: 25px">Name</th>
{{--                <th>Email</th>--}}
{{--                <th>Contact No</th>--}}
                <th style="font-size: 25px">User Role</th>
            </tr>
            @foreach($user as $users)

            <tr>
                    <td >
                        <a style="text-decoration: none;font-size: 20px" href="{{route('show',$users->id)}}">{{$users->name}}</a>
                    </td>
{{--                    <td>{{$users->email}}</td>--}}
{{--                    <td>{{$users->phone}}</td>--}}
                @if($users->role==2)
                    <td style="color: #1b7e5a">Authority</td>
                    @elseif($users->role==3)
                    <td style="color: #00a65a">General Admin</td>
                    @elseif($users->role==4)
                    <td style="color: #932ab6">Member</td>
                    @endif




            </tr>
            @endforeach
        </table>


    @endsection
