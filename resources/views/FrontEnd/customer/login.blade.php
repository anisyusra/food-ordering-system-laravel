@extends('FrontEnd.master')

@section('title')
    Sign In
@endsection

@section('content')
<!-- Login-page -->
	<div class="login-page about">
        <img class="login-w3img" src="{{ asset('/') }}frontEndSourceFile/images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Sign In to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="store" method="post"> 
                    @csrf
					<input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Login">
				</form>
				<p>First time with FOS?  <a href="{{ route('sign_up') }}"> Register Now!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //Login-page -->  
@endsection