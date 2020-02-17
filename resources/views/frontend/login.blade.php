@include('frontend/header')

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/slider/1.1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
                <br><br>
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" role="form" method="post" action="{{route('do.login')}}">
                        @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						
                        <button class="login100-form-btn">
                            <a>Login</a> 
						</button>

                                               
					</div>

				</form>
               
			</div>
		</div>
        
	</div>

	

<!--===============================================================================================-->
	<script src="backend/js/main.js"></script>
	 @include('frontend.footer')

</body>

</html>

