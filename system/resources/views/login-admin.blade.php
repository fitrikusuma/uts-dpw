<!doctype html>
<html lang="en">
  <head>
  	<title>Login Anaroz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('public/admin')}}/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2><a href="{{url('/')}}" >
						Anaroz
						</a></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url({{url('public/admin')}}/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>
						@include('template.utils.notif')
						<form action="{{url('login')}}" method="post">
							@csrf
			      		<div class="form-group mt-3">
			      			<input type="email" class="form-control" placeholder="Email" name="email">
			      			<label class="form-control-placeholder" for="email">Email</label>
			      		</div>
                        
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password">
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{url('public/admin')}}/js/jquery.min.js"></script>
  <script src="{{url('public/admin')}}/js/popper.js"></script>
  <script src="{{url('public/admin')}}/js/bootstrap.min.js"></script>
  <script src="{{url('public/admin')}}/js/main.js"></script>

	</body>
</html>

