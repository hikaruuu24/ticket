<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
	<meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('ui/images/favicon.png')}}">

	<!-- Page Title Here -->
	<title>Ticket System</title>
	
	
	
     <link href="{{asset('ui/css/style.css')}}" rel="stylesheet">

	<style>
		body {
    position: relative;
    overflow: hidden;
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url("{{asset('ui/images/login-godrej.png')}}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: blur(8px); /* Adjust the blur radius as needed */
    z-index: -1; /* Ensure the blurred background is behind other content */
}

body > * {
    position: relative;
    z-index: 1;
}


.blur-container {
    background: rgba(255, 255, 255, 0.7); /* Light white background with transparency */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 1;
}

.blur-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: inherit;
    background-size: inherit;
    background-position: inherit;
    background-repeat: inherit;
    z-index: -1;
    border-radius: 10px; /* Match the border-radius of the container */
}

	</style>

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-lg-4 col-md-8 col-sm-10">
					<div class="blur-container">
						<div class="login-form">
							<div class="text-center">
								<a href="index.html">
									<img src="{{asset('ui/images/godrej.png')}}" width="250" alt="">
								</a>
								<h3 class="title">Sign In</h3>
								<p>Sign in to your account to start using Dompact</p>
							</div>
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="mb-4">
									<label class="mb-1 text-dark">Username Or Email</label>
									<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter User Or Email" value="{{ old('username') }}">
								</div>
								<div class="mb-4 position-relative">
									<label class="mb-1 text-dark">Password</label>
									<input type="password" id="dlab-password" class="form-control" placeholder="Enter Password" name="password">
									<span class="show-pass eye">
										<i class="fa fa-eye-slash"></i>
										<i class="fa fa-eye"></i>
									</span>
								</div>
								<div class="form-row d-flex justify-content-between mt-4 mb-2">
									<div class="mb-4">
									</div>
									<div class="mb-4">
										{{-- <a href="page-forgot-password.html" class="btn-link text-primary">Forgot Password?</a> --}}
									</div>
								</div>
								<div class="text-center mb-4">
									<button type="submit" class="btn btn-danger btn-block">Sign In</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('ui/vendor/global/global.min.js')}}"></script>
      <script src="{{asset('ui/js/custom.min.js')}}"></script>
    <script src="{{asset('ui/js/dlabnav-init.js')}}"></script>
	
</body>
</html>


