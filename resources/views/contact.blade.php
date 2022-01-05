@extends('layouts.header')

@section('content')



		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 align="center"><b>Contact</b></h2>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<form method="POST" action="{{route('view.contact')}}">
				@csrf
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							@foreach($contact as $contacts)
							<div class="col-md-3">
								
								<p><span><i class="icon-location"></i></span>{{$contacts->address}}</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span>{{$contacts->phone}}</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> {{$contacts->email}}</p>
							</div>
							
							@endforeach
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<form action="#" class="contact-form">
								<div class="row">
									@foreach($contact as $contacts)
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" name="firstname" id="fname" class="form-control" placeholder="Your firstname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" name="lastname" id="lname" class="form-control" placeholder="Your lastname">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
								@endforeach
							</form>	
								
						</div>
					</div>
					@foreach($map as $maps)
					<div class="col-md-6">
						<div id="map" class="colorlib-map"><iframe src="{{$maps->map}}" style="width: 900px; height: 400px;"></iframe></div>		
					</div>
					@endforeach
				</div>
				
			</div>
		</form>
		</div>

		
	</body>
</html>
@endsection

