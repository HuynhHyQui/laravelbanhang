@extends('layout')
@section('content')

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Login to your account</h2>
                    <form action="{{URL::to('/login-customer')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email_account">Email</label>
                            <input name="email_account" placeholder="Email" data-validation="email" id="email_account" data-validation-error-msg="Invalid email">
                        </div>
                        <div class="form-group">
                            <label for="password_account">Password</label>
                            <input type="password" name="password_account" id="password_account" placeholder="Password">
                        </div>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </form>
                    <br>
                    <?php
                    $message = session()->get('message');
                    if ($message) {
                        echo '<span style="color: red;">' . $message . '</span>';
                        session()->put('message', null);
                    }
                    ?>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>New User Sign-up </h2>
                    <form action="{{URL::to('/add-customer')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="FullName">Full Name</label>
                            <input type="text" data-validation="length" data-validation-length="min1" name="customer_name" class="form-control" id="FullName" placeholder="Full Name" data-validation-error-msg="Full name not null">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Email</label>
                            <input name="customer_email" placeholder="Email" data-validation="email" id="InputEmail" data-validation-error-msg="Invalid email">
                        </div>
                        <div class="form-group">
                            <label for="pw">Password</label>
                            <input type="password" name="customer_password" break="" data-validation="strength" break="" data-validation-strength="3" id="pw" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="pw1">Confirmation Password</label>
                            <input type="password" name="repeat" data-validation="confirmation" data-validation-confirm="customer_password" id="pw1" data-validation-error-msg="The password isn't match" placeholder="Confirmation Password">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="customer_phone" data-validation="length" data-validation-length="min10" id="phone" data-validation-error-msg="Phone not null" placeholder="Phone">
                        </div>
                        <button type="submit" class="btn btn-default">Sign up</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->

@endsection