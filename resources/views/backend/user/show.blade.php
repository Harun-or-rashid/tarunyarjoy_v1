

   @extends('backend.master')
   @section('main_content')

<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Phone</th>
{{--        <th>Blood Group</th>--}}
        <th>Action</th>
    </tr>
    <tr>
        <td>{{$person->name}}</td>

        @if($person->role==1)
            <td>Super Admin</td>
        @elseif($person->role==2)
            <td>Authority</td>
        @elseif($person->role==3)
            <td>General Admin</td>
            @elseif($person->role==4)
                <td>Member</td>
                @endif
        <td>{{$person->email}}</td>
        <td>{{$person->phone}}</td>
        <td><a class=" fa fa-edit" href="{{url('edit',$person->id)}}"></a></td>
    </tr>
</table>
       @endsection

