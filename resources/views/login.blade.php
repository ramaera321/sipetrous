@extends('layouts.login_template')
@section('head')
    <style>
        body{
            width: 100%;
            height: 663px;
            background-image: linear-gradient(#FFC75F, #1C6873);
            padding-top: 30px;
        }
    </style>
@endsection
@section('login')
    <div class="body-login">
        <div class="container">
            <div class="login">
                <div class="d-flex flex-row flex-sm-fill">
                    <div class="box"><img src="{{ asset('/image/2115323.png') }}" alt=""></div>
                    <div class="box">
                        <h3>Login</h3>
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="font-weight-bold">User Name</label>
                              <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1" class="font-weight-bold">Password</label>
                              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Show Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                          <a href="/registrasi">Sign up for Si Petrous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection