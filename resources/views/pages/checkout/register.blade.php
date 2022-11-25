<!DOCTYPE html>
<html lang="en">
<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="signup-form">
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
                    <a href="{{URL::to('/login')}}" class='btn btn-primary' style="width:97px;">Sign in</a>
                    <a href="{{URL::to('/')}}" class='btn btn-primary' style="width:97px;">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script>
		$.validate({
			modules: 'security',
			onModulesLoaded: function() {
				var optionalConfig = {
					fontSize: '12pt',
					padding: '4px',
					bad: 'Very bad',
					weak: 'Weak',
					good: 'Good',
					strong: 'Strong'
				};

				$('input[name="pass"]').displayPasswordStrength(optionalConfig);
			}
		});
	</script>

</html>