<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title') - {{ settings('app_name') }}</title>

    <meta name="application-name" content="{{ settings('app_name') }}"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ url('assets/img/icons/mstile-144x144.png') }}" />
	
	<style>
	header{float:left; width:100%; padding:10px 0px;}	
	.logo{float:left; width:350px;}
	.logo img{width:100%;}
	.button{float:right; margin-top:18px;}
	.button ul{display:inline; padding-left: 0px; padding-top: 10px;}
	.button ul li{list-style: none; display: inline-block;}
	.button ul li a{font-size: 16px; text-decoration: none; padding: 10px 20px; border: 1px solid #273168; font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";}
	.img{float:left; width: 100%;}
	.img img{width:100%;}
	.heading{float:left; width: 100%; text-align: center; padding: 20px 0px;}
	h1{font-size: 24px; font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif"; color: #273168;}
	h3{font-size: 18px; font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif"; color: #273168;}
	p{font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";}
	.faq{float:left;width: 100%;}
	.faq p{border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 10px;}
	
	@media only screen and (max-width: 600px) {
		.logo{width:100%;}
		.button{float:left; width:100%; text-align: center;}
		.button li{width:50%; float:left;}
		.button li a{width:100%; display:table; padding:10px 0px !important;}
	}
</style>
    
    @yield('styles')
</head>
<body>
	<header>
		<div class="logo"><img src="{{ asset('assets/img/land/logo.jpg')}}"/></div>
		<div class="button">
			<ul>
				<li><a href="{{ url('register') }}">Register</a></li>
				<li><a href="{{ url('login') }}">Login</a></li>
			</ul>
		</div>
	</header>
	<div class="img">
		<img src="{{ asset('assets/img/land/banner.jpg')}}"/>
	</div>
	<div class="heading">
		<h1>Welcome</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	</div>
	<div class="faq">
		<h3>What does Perls Best really mean? </h3>
		<p>Perls means Perls literacy assessment score – this is your basic literacy score made up of grammar / comprehension and numeri.</p>
		<h3>Why should I take the test?  </h3>
		<p>“We would like to help you improve your English skills. To do this, we need to know where to start. Each person has a different level of English, this program will tell us where you will start in the program”.
Almost all the training is South Africa uses English – the better your knowledge, the better your chances of success.
</p>
		<h3>Why is it free for the first 2000 people?</h3>
		<p>We are doing a study in South Africa to access the literacy skills of south Africans across a broad spectrum both age wise and province wise. We will then be able to have comparable figures on what is considered a norm and this will in turn assist employers to benchmark the literacy of their staff.</p>
		<h3>I have not received my verification email</h3>
		<p>Please wait for five minutes and also check on you junk mails. If there is nothing you can contact the support team.</p>
	</div>
</body>
</html>
