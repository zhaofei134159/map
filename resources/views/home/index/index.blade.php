@extends('home.layouts.base')

@section('content') 
	<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="#" class="g"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="banner">
				<script src="{{ URL::asset('/home/js/responsiveslides.min.js') }}"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-inf">
								<h3>soluta nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>euismod nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>tortor nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>
		<div class="banner-bottom">
			<ul id="flexiselDemo1">			
				<li>
					<div class="banner-bottom-grid">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
							qui blanditiis praesentium voluptatum deleniti atque corrupti 
							quos dolores et quas molestias excepturi sint occaecati
							cupiditate non provident</p>
						<div class="more">
							<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
							qui blanditiis praesentium voluptatum deleniti atque corrupti 
							quos dolores et quas molestias excepturi sint occaecati
							cupiditate non provident</p>
						<div class="more">
							<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-bottom-grid">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus 
							qui blanditiis praesentium voluptatum deleniti atque corrupti 
							quos dolores et quas molestias excepturi sint occaecati
							cupiditate non provident</p>
						<div class="more">
							<a href="single.html" class="hvr-bounce-to-bottom sint">Read More</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
		<div class="blog">
			<div class="blog-left">
				<div class="blog-left-grid">
					<div class="blog-left-grid-left">
						<h3><a href="single.html">voluptates repudiandae sint non recusandae</a></h3>
						<p>by <span>Charlie</span> | June 29,2015 | <span>Sint</span></p>
					</div>
					<div class="blog-left-grid-right">
						<a href="#" class="hvr-bounce-to-bottom non">20 Comments</a>
					</div>
					<div class="clearfix"> </div>
					<a href="single.html"><img src="images/4.jpg" alt=" " class="img-responsive" /></a>
					<p class="para"> Itaque earum rerum hic tenetur a sapiente delectus, 
						ut aut reiciendis voluptatibus maiores alias consequatur aut 
						perferendis doloribus asperiores repellat.Et harum quidem rerum 
						facilis est et expedita distinctio. Nam libero tempore, cum 
						soluta nobis est eligendi optio cumque nihil impedit quo minus 
						id quod maxime placeat facere possimus, omnis voluptas assumenda 
						est, omnis dolor repellendus. Temporibus autem quibusdam et 
						aut officiis debitis.</p>
					<div class="rd-mre">
						<a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
					</div>
				</div>
				<div class="blog-left-grid">
					<div class="blog-left-grid-left">
						<h3><a href="single.html">voluptates repudiandae sint non recusandae</a></h3>
						<p>by <span>Charlie</span> | June 29,2015 | <span>Sint</span></p>
					</div>
					<div class="blog-left-grid-right">
						<a href="#" class="hvr-bounce-to-bottom non">40 Comments</a>
					</div>
					<div class="clearfix"> </div>
					<a href="single.html"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
					<p class="para"> Itaque earum rerum hic tenetur a sapiente delectus, 
						ut aut reiciendis voluptatibus maiores alias consequatur aut 
						perferendis doloribus asperiores repellat.Et harum quidem rerum 
						facilis est et expedita distinctio. Nam libero tempore, cum 
						soluta nobis est eligendi optio cumque nihil impedit quo minus 
						id quod maxime placeat facere possimus, omnis voluptas assumenda 
						est, omnis dolor repellendus. Temporibus autem quibusdam et 
						aut officiis debitis.</p>
					<div class="rd-mre">
						<a href="single.html" class="hvr-bounce-to-bottom quod">Read More</a>
					</div>
				</div>
			</div>
			<div class="blog-right">
				<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					  <ul class="resp-tabs-list">
						  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Popular</span></li>
						  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>Recent</span></li>
						  <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>Comments</span></li>
						  <div class="clear"></div>
					  </ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
								  <div class="tab_list">
									<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/7.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015 <span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/8.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/9.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/10.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
								  <div class="tab_list">
									<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/8.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/9.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/10.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/7.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="facts">
								  <div class="tab_list">
									<a href="images/9-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/9.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/10.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/7-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/7.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
								<div class="facts">
								   <div class="tab_list">
									<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
										<img src="images/8.jpg" alt=" " class="img-responsive" />
									</a>
								  </div>
								  <div class="tab_list1">
									<a href="#">excepturi sint occaecati</a>
									<p>June 30,2015<span>Nam libero tempore, cum soluta nobis.</span></p>
								  </div>
								  <div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="newsletter">
					<h3>Subscribe To Our Newsletter</h3>
					<form>
						<input type="text" value="Email Address" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email Address';}" required="">
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="four-fig">
					<div class="four-fig1">
						<a href="images/11-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
							<img src="images/11.jpg" class="img-responsive" alt=" " />
						</a>
					</div>
					<div class="four-fig1">
						<a href="images/14-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
							<img src="images/14.jpg" class="img-responsive" alt=" " />
						</a>
					</div>
					<div class="four-fig1">
						<a href="images/10-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
							<img src="images/21.jpg" class="img-responsive" alt=" " />
						</a>
					</div>
					<div class="four-fig1">
						<a href="images/8-.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
							<img src="images/22.jpg" class="img-responsive" alt=" " />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="pgs">
					<h3>Pages</h3>
					<ul>
						<li><a href="#">doloribus asperiores repellat</a></li>
						<li><a href="#">Itaque earum rerum hic tenetur</a></li>
						<li><a href="#">deserunt mollitia laborum et dolorum</a></li>
						<li><a href="#">facilis est et expedita distinctio</a></li>
						<li><a href="#">occaecati cupiditate non provident</a></li>
						<li><a href="#">deserunt mollitia laborum et dolorum</a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
@endsection