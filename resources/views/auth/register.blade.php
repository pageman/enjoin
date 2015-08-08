@extends('layouts.default')

<div class="container">            
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
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
                <button class="btn btn-primary" type="submit">Sign-up</button>
            </form>

            <hr class="hr-or">

            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-block btn-fb">Sign-up via Facebook</button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-block btn-fb">Sign-up via Twitter</button>
                </div>
            </div>

        </div>
    </div>
</div>
