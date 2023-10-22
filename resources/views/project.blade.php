@extends('layout.app')
@section('content')
<section class="ftco-section ftco-project" id="projects-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
	  <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
		  <h1 class="big big-2">Projects</h1>
		<h2 class="mb-4">Projects</h2>
		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
	  </div>
	</div>
		<div class="row">
			@foreach($data['projects'] as $row)
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center fadeInUp ftco-animated" style="background-image: url({{$row['image']}});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="{{route('project.show',$row['id'])}}">{{$row['title']}}</a></h3>
							<span>{{$row['category']}}</span>
						</div>
					</div>
				</div>
			@endforeach

		</div>
	</div>
</section>

@endsection