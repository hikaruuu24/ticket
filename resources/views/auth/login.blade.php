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

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							{{-- <a href="index.html"><img src="{{asset('ui/images/cariloker-full.png')}}" width="250" alt=""></a> --}}

							<h3 class="title">Sign In</h3>
							<p>Sign in to your account to start using Dompact</p>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Username Or Email</label>
								<input type="text" class="form-control form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter User Or Email" value="{{old('username')}}">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dlab-password" class="form-control form-control" placeholder="Enter Password" name="password">
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
								<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left ">
						<div class="login-content">
							<img src="{{asset('ui/images/ticket.png')}}" alt="" >

							{{-- <p>Your true value is determined by how much more you give in value than you take in payment. ...</p> --}}
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

