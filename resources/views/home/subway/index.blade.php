@extends('home.layouts.base')


@section('content')
	<div class="single-page-artical" style="min-height:800px;">
		<div class="artical-content">
			<h3>地铁图</h3>
		</div>	
		<iframe src="{{ url('subway/detail') }}" frameborder="0" width="100%" height="800px"></iframe>
	</div>
	<br>
@endsection