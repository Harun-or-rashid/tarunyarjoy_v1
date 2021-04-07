@include('frontend.partial.header')


<div class="container pt-5">
    <form class="form-box" action="/create.user" method="post" enctype="multipart/form-data">
        <h3 class="form-box success">Create an Admin</h3><br>
        @csrf
        <div class="form-group ">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name like 'Ringku Islam'" name="name">
            {{$errors->first('name')}}
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
            {{$errors->first('email')}}
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Phone</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" placeholder="01000000000">
            {{$errors->first('phone')}}
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="Password">
            {{$errors->first('password')}}
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Role</label>
            <select name="role" class="form-control" id="exampleFormControlSelect1">
                <option value="" disabled>Select Customer Status</option>
                <option value="2">Authority</option>
                <option value="3">General Admin</option>
                <option value="4">Member</option>
            </select>
            {{$errors->first('role')}}
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Upload an Image</label>
            <input type="file" class="btn-file" id="exampleFormControlInput1" name="image">
            {{$errors->first('image')}}
        </div>
        <br>


        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>


    </form>

</div>

@include('frontend.partial.footer')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


