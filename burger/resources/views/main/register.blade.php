<!DOCTYPE html>
<html lang="en" >


<head>
	<meta charset="utf-8">
	<title>Z'Burger - Inscription</title>
	<!-- Stylesheets -->
	<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('assets/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">

	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

	<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

	<link
		href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&amp;family=Open+Sans:wght@400;600;700;800&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

	<div class="page-wrapper">



		<!-- Header Style Two -->
		<header class="main-header header-style-two">

			<!-- Header Upper -->
			<div class="header-upper">

				<div class="auto-container">
					<div class="inner-container clearfix">
						<!--Info-->
						<div class="logo-outer">
							<div class="logo"><a href="{{route('dashboard')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""
																		  title=""></a></div>
						</div>

						<!--Nav Box-->
						<div class="nav-outer clearfix">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md navbar-light" style="padding-right: 160px">
								<div class="navbar-header">
									<!-- Togg le Button -->
									<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon flaticon-menu"></span>
									</button>
								</div>

								<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class=""><a href="{{route('dashboard')}}">Accueil</a>

										</li>
										<li class=""><a href="{{route('shop')}}">Boutique</a>

										</li>
										<li class=""><a href="{{route('menu')}}">Menu</a>

										</li>
										<li><a href="{{route('gallery')}}">Galerie</a></li>

									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->

							<div class="outer-box">
								<div class="order">
									Commandez Maintenant
									<span><a href="tel:1800-456-7890">(+33) 790 736 012</a></span>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
			<!--End Header Upper-->

			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="{{route('dashboard')}}" class="img-responsive"><img src="{{asset('assets/images/logo-small.png')}}" alt=""
																		   title=""></a>
					</div>

					<!--Right Col-->
					<div class="right-col pull-right">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
									aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class=""><a href="{{route('dashboard')}}">Accueil</a>

									</li>
									<li class=""><a href="{{route('shop')}}">Boutique</a>

									</li>
									<li class=""><a href="{{route('menu')}}">Menu</a>

									</li>
									<li><a href="{{route('gallery')}}">Galerie</a></li>

								</ul>
							</div>
						</nav><!-- Main Menu End-->
					</div>

				</div>
			</div>
			<!--End Sticky Header-->

		</header>
		<!-- End Main Header -->
		<!-- End Main Header -->

		<!-- Contact Page Title -->
		<section class="contact-page-title" style="background-image: url(assets/images/background/15.jpg)">

		</section>
		<!-- End Contact Page Title -->

		<!-- Contact Page Section -->
		<section class="contact-page-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Form Column -->
					<div class="form-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<h3> S'inscrire </h3>
							</div>

							<!-- Contact Form -->
							<div class="contact-form">
								<form method="post" id="contact-form" action="{{ route('register') }}" onsubmit="return comparePwd()" >
                                    @csrf
                                    <div class="row clearfix">

										<div class="form-group col-lg-6 col-md-12 col-sm-12">
											<input type="text" name="first_name" placeholder="Prénom*" required>
										</div>

										<div class="form-group col-lg-6 col-md-12 col-sm-12">
											<input type="text" name="name" placeholder="Nom*" required>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<input type="text" name="email" placeholder="Email*" required>
										</div>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<input id="pwd" type="password" name="password" placeholder="Mot de passe*" required>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<input id="pwdConfirmed" type="password" name="password_confirmation" placeholder="Confirmez votre mot de passe*" required>
										</div>

										<label class="checkbox-inline">
											<input type="checkbox" value="" required="required">
											En cliquant "Créer mon compte", j'accepte les termes et les conditions.
										</label>

										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="theme-btn btn-style-five"><span
													class="txt">Créer mon compte</span></button>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<h4>Avez vous déja un compte ? <a href="{{route('login')}}">Se connecter</a></h4>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>

			</div>
		</section>
		<!--End Faq Section-->

		<!--Main Footer-->
		<footer class="main-footer" style="background-image: url(assets/images/background/4.png)">
			<div class="auto-container">

				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Footer Column -->
						<div class="footer-column col-lg-3 col-md-6 col-sm-12">
							<!-- Info Widget -->
							<div class="footer-widget info-widget">
								<h4>Informations de contact</h4>
								<a class="number" href="tel:1800-574-9687">(1800) 574 9687</a>
								<ul class="email-list">
									<li><a href="mailto:wengdo@contact.co.in">wengdo@contact.co.in</a></li>
									<li><a href="mailto:contact@wengdo.com">contact@wengdo.com</a></li>
								</ul>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="footer-column col-lg-6 col-md-12 col-sm-12">
							<!-- Logo Widget -->
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="{{route('dashboard')}}"><img src="{{asset('assets/images/footer-logo.png')}}" alt="" /></a>
								</div>
								<div class="text">Just Burgers <br> 24 Rue Cristino Garcia<br> 93210 ST DENIS
								</div>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="footer-column col-lg-3 col-md-6 col-sm-12">
							<!-- Info Widget -->
							<div class="footer-widget timing-widget">
								<h4>Les heures d'ouvertures</h4>
								<ul class="timing-list">
									<li>Lundi-Vendredi<span>12:00 – 18:00 </span></li>
									<li>Samedi <span>12:00 – 15:00 </span></li>
									<li>Dimanche <span>Fermé</span></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<!-- Footer Bottom -->
				<div class="footer-bottom">
					<div class="clearfix">
						<div class="pull-left">
							<div class="copyright">&copy; Copyright 2020 just Burgers WordPress Theme. All right
								reserved.</div>
						</div>
						<div class="pull-right">

						</div>
					</div>
				</div>

			</div>
		</footer>


	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


	<!--Scroll to top-->
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
	<script src="{{asset('assets/js/owl.js')}}"></script>
	<script src="{{asset('assets/js/wow.js')}}"></script>
	<script src="{{asset('assets/js/validate.js')}}"></script>
	<script src="{{asset('assets/js/appear.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
	<script>
		// Password and Confirmed passwords validation
		let pwd = document.querySelector('#pwd');
		let confirmPwd = document.querySelector('#pwdConfirmed')
		// let matchingTxt = document.querySelector('.matching-txt')
		// let form = document.querySelector('.form')
		function comparePwd() {
			if (confirmPwd.value) {
				if (pwd.value != confirmPwd.value) {
					// matchingTxt.style.display = 'block'
					// matchingTxt.style.color = 'red'
					// matchingTxt.innerHTML = 'Not Matching'
					confirmPwd.style.border = '2px solid red'
					confirmPwd.style.boxShadow = '0 0 5px #a84a4c'
					return false
					e.preventDefault()

				} else {
					// matchingTxt.style.display = 'block'
					// matchingTxt.style.color = 'green'
					// matchingTxt.innerHTML = 'Matching'
					confirmPwd.style.border = '2px solid'
					confirmPwd.style.borderColor = 'var(--border-color-9)'
					confirmPwd.style.boxShadow = 'none'
					return true
				}
			}
		}
		confirmPwd.addEventListener('keyup' , () => {
			comparePwd()
		})

		pwd.addEventListener('keyup' , () => {
			comparePwd()
		})
	</script>
</body>


</html>
