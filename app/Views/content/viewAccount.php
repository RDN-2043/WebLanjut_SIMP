<!doctype html>
<html>
<head>
<title>Account</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


* {
	box-sizing: border-box;
}

body {
	background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Sans Pro', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
	margin: 20px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #daae51;
	background-color: #daae51;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}


button:focus {
	outline: none;
}

button.ghost {
    color: #daae51;
	background-color: #FFFFFF;
	border-color: #daae51;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
	outline: none;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right,  #daae51, #daae51);
	background: linear-gradient(to right,#daae51, #daae51);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

.social:hover{
	background-color: #daae51;
	color: #FFFFFF;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

.ghost_mobile{
		display:none;
}

#mobile_para{
		display: none;
	}

@media only screen and (max-width: 575.98px) 
   { 
	
	.form-container h1{
		font-size: 1.1rem;
		font-weight: 700;
	}
	.container{
		overflow:auto;
	}
	.overlay-container{
		display: none;
	}
	.sign-up-container{
		width: 100%;
	}
	.sign-in-container{
		width: 100%;
	}

	.container.right-panel-active .sign-up-container{
		transform: translateX(0);
		z-index: 5;
	}

	.container.right-panel-active .sign-in-container{
		transform: translateX(-100%);
		z-index: 5;
	}	 
	.ghost_mobile{
		display:block;
		font-size: 0.8rem;
		background-image: linear-gradient(180deg,#849918,#d0f224);

	}

	

	#mobile_para{
		display: block;
	}

   }

</style>



<body>

<div class="container" id="container">
	<div class="row">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				<a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
			<p id="mobile_para">To keep connected with us,please login</p>
			<button class="ghost_mobile" id="signIn_mobile">Sign In</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
				<a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
			<p id="mobile_para">Don't have an account? Sign up here !!</p>
			<button class="ghost_mobile" id="signUp_mobile">Sign Up</button>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Selamat Datang Kembali!</h1>
				<p>Untuk tetap terkoneksi denganku pastikan masuk dengan data akunmu ya!</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Halo!</h1>
				<p>Masukkan data personal anda dan mari membaca bersama ku!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>


<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const signUpButton_mobile = document.getElementById('signUp_mobile');
const signInButton_mobile = document.getElementById('signIn_mobile');


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

signUpButton_mobile.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton_mobile.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


</script>
</body>

</html>