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
	<title>Cari Loker</title>
	
	
	
     <link href="{{asset('ui/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<a href="index.html"><img src="{{asset('ui/images/cariloker-full.png')}}" width="250" alt=""></a>

							<h3 class="title">Register</h3>
							<p>Regist your account to start using Dompact</p>
						</div>
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Username</label>
								<input type="text" class="form-control form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter Username" value="{{old('username')}}">
							</div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="text" class="form-control form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{old('email')}}">
							</div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Account Type</label>
                                <select class="form-control form-control @error('account_type') is-invalid @enderror" name="account_type" id="">
                                    <option value="">Select Account Type</option>
                                    <option value="3">Recruiter</option>
                                    <option value="2">Job Seeker</option>
                                </select>
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dlab-password" class="form-control form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password Confirmation</label>
								<input type="password" id="password_confirmation" class="form-control form-control @error('password_confirmation') is-invalid @enderror" placeholder="Enter Password Confirmation" name="password_confirmation">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							
							{{-- <p>Your true value is determined by how much more you give in value than you take in payment. ...</p> --}}
						</div>
						<div class="login-media text-center">
							<img src="{{asset('ui/images/laptop-login.jpeg')}}" alt="">
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


