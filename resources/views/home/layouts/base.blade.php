<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />


<link href="{{ URL::asset('/home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ URL::asset('/home/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

<script src="{{ URL::asset('home/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::asset('home/js/bootstrap.js') }}"> </script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

@yield('css')

@yield('js')

</head>
	
<body>
	<div class="banner-body">
		<div class="container">
			@include('home.layouts.header')

			{{-- 继承后插入的内容 --}}
			@yield('content')
		</div>
	</div>
	@include('home.layouts.footer')
</body>
</html>