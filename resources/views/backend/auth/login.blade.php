@extends('backend.index')
@section('app')
    <div class="form-box" id="login-box">
        <div class="header">Sign In</div>
        <form action="{{ route('login') }}" method="post">
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
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="*********" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember_me" /> Remember me
                    @error('remember_me')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn bg-olive btn-block">Sign me in</button>

                <p><a href="{{ route('password.request') }}">I forgot my password</a></p>

                <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </div>
        </form>

        <div class="margin text-center">
            <span>Sign in using social networks</span>
            <br />
            <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
            <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
            <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

        </div>
    </div>


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
@endsection
