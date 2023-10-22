@extends('layout.app')
@section('content')
<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate fadeInUp ftco-animated">
          <h2 class="mb-3">{{$data['title']}}</h2>
          <p>
            <img src="{{$data['image']}}" alt="" class="img-fluid">
          </p>
          <p>{{$data['description']}}</p>
          
        </div> 
       
      </div>
    </div>
  </section>

@endsection