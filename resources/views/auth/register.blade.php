@extends('layouts.default')

@section('content')
<div class="container"> 
    <div class="auth-container">
        <header class="text-center">
            <h1>Sign-up</h1>
        </header>
        <form>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Your email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Your password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Your password">
            </div>
            <button class="btn btn-primary" type="submit">
                <span class="fa fa-sign-in fa-fw"></span>
                Sign-up
            </button>
        </form>

        <hr class="hr-or">

        <div class="row">
            <div class="col-sm-6 form-group">
                <button class="btn btn-block btn-fb">Sign-up via Facebook</button>
            </div>
            <div class="col-sm-6 form-group">
                <button class="btn btn-block btn-twitter">Sign-up via Twitter</button>
            </div>
        </div>
    </div>
</div>
@endsection