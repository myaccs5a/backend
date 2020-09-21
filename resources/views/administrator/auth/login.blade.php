<!DOCTYPE html>
<html lang="en">
<head>
<title>Quản trị | Đăng nhập </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('administrator/auth/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('administrator/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('administrator/auth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('administrator/auth/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" action="{{route('postLogin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-title p-b-32">
						Đăng Nhập Admin
					</span>

                    <span class="m-b-10 text-danger" style="display: block;">{{$errors->first('email')}}</span>
					<div class="wrap-input100 m-b-36">
						<input class="input100" type="text" name="email" placeholder="Địa chỉ email">
					</div>

                    <span class="m-b-10 text-danger">{{$errors->first('password')}}</span>
					<div class="wrap-input100 m-b-12">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password"  placeholder="Mật khẩu">
					</div>

					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100"  type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Nhớ đăng nhập
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Quên mật khẩu ?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Đăng Nhập
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('administrator/auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('administrator/auth/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('administrator/auth/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('administrator/auth/js/main.js')}}"></script>

</body>
