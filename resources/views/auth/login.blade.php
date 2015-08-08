@extends('layouts.default')

@section('content')

<div class="container">            
    <div class="auth-container">
        <header class="text-center">
            <h1>Log-in</h1>
        </header>
        <form>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" placeholder="Your email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Your password">
            </div>
            <button class="btn btn-primary" type="submit">
                <span class="fa fa-sign-in fa-fw"></span>
                 Login
            </button>
        </form>

        <hr class="hr-or">

        <div class="row">
            <div class="col-sm-6 form-group">
                <button class="btn btn-block btn-fb">
                    <span class="fa fa-fw fa-facebook"></span> Login via Facebook
                </button>
            </div>
            <div class="col-sm-6 form-group">
                <button class="btn btn-block btn-twitter">
                    <span class="fa fa-fw fa-twitter"></span> Login via Twitter
                </button>
            </div>
        </div>
    </div>
</div>

@endsection