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
                            <input type="password" name="password_account" id="password_account" placeholder="Password"data-validation="length" data-validation-length="min1"data-validation-error-msg="Password not null">
                        </div>
                        <button type="submit" class="btn btn-default">Sign in</button>
                        <a href="{{URL::to('/register')}}" class='btn btn-primary' style="width:91px;">Register</a>
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