@extends('layout.app')
@section('content')
	<section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
			@foreach($data['slider'] as $row)
				<div class="slider-item ">
					<div class="overlay"></div>
				<div class="container">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img" style="background-image:url({{$row['image']}});">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">{{$row['greetings']}}</span>
							<h1 class="mb-4 mt-3">{{$row['name']}}</span></h1>
							<h2 class="mb-4">{{$row['title']}}</h2>
							<p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
						</div>
						</div>
					</div>
				</div>
				</div>
			@endforeach
	      
	    </div>
    </section>
    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{$data['about']['image']}});">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>{{$data['about']['name']}}</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>{{$data['about']['dateOfBirth']}}</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>{{$data['about']['address']}}</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>{{$data['about']['zipCode']}}</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>{{$data['about']['email']}}</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>{{$data['about']['phone']}}</span></li>
		            </ul>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    		<div class="row">
				@foreach($data['services'] as $row)
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="{{$row['icon']}}"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">{{$row['name']}}</h3>
							</div>
						</a>
					</div>
				@endforeach
			</div>
    	</div>
    </section>
	<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
					@foreach($data['skills'] as $row)
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>{{$row['name']}}</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="{{$row['progress']}}"
							  	aria-valuemin="0" aria-valuemax="100" style="width:{{$row['progress']}}%">
							    <span>{{$row['progress']}}%</span>
							  	</div>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
	</section>
@endsection