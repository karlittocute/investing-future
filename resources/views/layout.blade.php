<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Investing Future</title>
	<meta name="title" content="Investing Future" />
	<meta name="description" content="Investing Future" />
	<meta name="author" content="Kitsela Karolina">
	<meta name="google-site-verification" content="ZCk1K8d-fJvZhcKWcJodX3Lxx0WJOSXrd2pR8ya__iM" /> <!--гугл почта-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> <!--jquery-->

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

					@yield('content')
	<!— Global Site Tag (gtag.js) - Google Analytics —>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107289904-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
	  gtag('js', new Date());

	  gtag('config', 'UA-107289904-1');
	</script>
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