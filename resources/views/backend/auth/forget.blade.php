@extends('backend.index')
@section('app')
    <div class="form-box" id="login-box">
        <div class="header">Reset Password</div>
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="body bg-gray">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="john.doe@mail.com" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn bg-olive btn-block">Send Password Reset Link</button>
            </div>
        </form>
    </div>


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
@endsection
