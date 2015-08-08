@extends('layouts.default')

<div class="container">            
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <header class="text-center">
                <h1>Log-in</h1>
            </header>
            <form>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Your email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Your password">
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>

            <hr class="hr-or">

            <div class="row">
                <div class="col-sm-6">
                    <button class="btn btn-block btn-fb">Login via Facebook</button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-block btn-fb">Login via Twitter</button>
                </div>
            </div>

        </div>
    </div>
</div>
