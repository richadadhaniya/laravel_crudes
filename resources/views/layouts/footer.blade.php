<style type="text/css">
			footer{
			background-color: black;
			color: white;
		}
	
</style>

<div class="colorlib-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Trusted Partners</h2>
					</div>
				</div>
				<div class="row">
					<div class="col partner-col text-center">
						<img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4 style="color: white;">About Footwear</h4>
						@foreach($data as $about)
						<p>{{$about->description}}</p>
						@endforeach
						<p>
							<ul class="colorlib-social-icons">
								@foreach($data2 as $socialmedia)

								<li><a href="{{$socialmedia->instagram}}"><i class="icon-instagram" style="color: #ff33ff"></i></a></li>
								<li><a href="{{$socialmedia->facebook}}"><i class="icon-facebook" style="color: #1a8cff"></i></a></li>
								<li><a href="{{$socialmedia->twitter}}"><i class="icon-twitter" style="color: #80bfff"></i></a></li>
								
								@endforeach
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4 style="color: white;">Quick Link</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="{{route('welcome')}}"style="color: white;">Home</a></li>
								
								<li><a href="{{route('about')}}" style="color: white;">About</a></li>
								<li><a href="{{route('contacts')}}" style="color: white;">Contact</a></li>
								
							</ul>
						</p>
					</div>
					

					<div class="col footer-col">
						<h4 style="color: white;">Category</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html" style="color: white;">Men</a></li>
							<li><a href="#" style="color: white;">Women</a></li>
							
						</ul>
					</div>

					<div class="col footer-col">
						<h4 style="color: white;">Contact Information</h4>
						<ul class="colorlib-footer-links">
							@foreach($data1 as $contact)
							<li><i class="icon-location">{{$contact->address}}</i></li>
							<li><i class="icon-phone3"><a href="">{{$contact->phone}}</a></i></li>
							<li><a href=""><i class="icon-paperplane">{{$contact->email}}</a></i></li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center" style="background-color: black; color: white;">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="color:#4dd2ff;">Richa Dadhaniya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank" style="color:#4dd2ff;">Unsplash</a> , <a href="http://pexels.com/" target="_blank" style="color:#4dd2ff;">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	

	