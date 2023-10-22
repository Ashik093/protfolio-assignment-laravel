@extends('layout.app')
@section('content')
    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Work Experience</h1>
            <h2 class="mb-4">Work Experience</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
    		<div class="row">
				@foreach($data['workEperience'] as $row)
					<div class="col-md-6">
						<div class="resume-wrap ftco-animate">
							<span class="date">{{$row['year']}}</span>
							<h2>{{$row['possition']}}</h2>
							<span class="position">{{$row['organization']}}</span>
							<p class="mt-4">{{$row['description']}}</p>
						</div>
					</div>
				@endforeach
    			
    		</div>
    	</div>
    </section>

@endsection