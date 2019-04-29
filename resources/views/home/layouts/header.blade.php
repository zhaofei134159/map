	<div class="header">
		<div class="header-nav">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				   <a class="navbar-brand" href="{{ url('/') }}"><span>My</span>feiyou</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom @if($class=='index') active @endif"><a href="{{ url('/') }}">首页</a></li>
					<li class="hvr-bounce-to-bottom @if($class=='map') active @endif"><a href="{{ url('map') }}">地图</a></li>
					<li class="hvr-bounce-to-bottom @if($class=='subway') active @endif"><a href="{{ url('subway') }}">地铁图</a></li>
					<li class="hvr-bounce-to-bottom @if($class=='about') active @endif"><a href="{{ url('about') }}">关于</a></li>
				  </ul>
				  <div class="sign-in">
					<ul>
						<li><a href="{{ URL::to('login').'?redirectUrl='.url()->full() }}">Login</a>/</li>
						<li><a href="register.html">Register</a></li>
					</ul>
					</div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>

	</div>
