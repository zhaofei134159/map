@extends('home.layouts.base')

@section('content') 
	<div class="single-page-artical" style="min-height:400px;">
		<div class="artical-content">
			<h3>附近</h3>
			<iframe src="{{ url('map/detail') }}" frameborder="0" width="100%" height="800px"></iframe>
		</div>	
	</div>
	<br>
@endsection