<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Investing Future</title>
	<meta name="title" content="Investing Future" />
	<meta name="description" content="Investing Future" />
	<meta name="author" content="Kitsela Karolina">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> <!--jquery-->
	<!--  <script type="text/javascript" src="assets/js/jquery.onepage-scroll.js"></script> скрипт для скроллинга-->
	<!--  <link href='onepage-scroll.css' rel='stylesheet' type='text/css'> стили для body и для прокрутки, которая находится справа-->
	

	<link href="{{ URL::asset('/bootstrap/css/theme.css') }}" rel="stylesheet">
	<meta content="width=1180" name="viewport" id="viewport">
	
    <link href="{{ URL::asset('/style.css') }}" rel="stylesheet">
	
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="{{ URL::asset('/assets/css/pushy.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/assets/css/masonry.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('/assets/css/odometer-theme-default.css') }}">
	
	<!-- <script> скрипт, без которого скроллинг не работает
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: true
      });
		});
		
	</script>  -->
	

	
</head>
<body>
<section>
	<div class="mainsection">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-10">
						<a href="{{ URL::asset('/') }}" class="thumbnail logo">
							<img src="{{ URL::asset('images/your_logo.png') }}" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-2 col-md-offset-7 col-xs-offset-2 col-xs-8">
					
						@if (Auth::check())
							<a style="color:white" href="/user/{{Auth::user()->id}}">{{Auth::user()->email}}</a></br>
							<a style="color:white" href="{{ URL::asset('/logout') }}">Выход</a>
						@else 
							<a style="color:white" href="{{ URL::asset('user/create') }}">Регистрация</a></br>
							<a style="color:white" href="{{ URL::asset('/login') }}">Вход</a>
						@endif
					</div>
				</div>
				<div style="background-color:rgba(255,255,255,0.65)" class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</section>

	<script src="{{ URL::asset('/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="{{ URL::asset('/assets/js/ie10-viewport-bug-workaround.js') }}"></script>
	<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script src="{{ URL::asset('/assets/js/masonry.js') }}"></script>
	<script src="{{ URL::asset('/assets/js/pushy.min.js') }}"></script>
	<script src="{{ URL::asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('/assets/js/wow.min.js') }}"></script>
	<script src="{{ URL::asset('/assets/js/scripts.js') }}"></script>
	<script src="{{ URL::asset('/assets/js/odometer.js') }}"></script>
</body>
</html>