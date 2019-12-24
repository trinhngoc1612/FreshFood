@extends('index')
@section('content')

@include('layouts.big-img')

<div class="container" id="handbook">
	<div class="row">
		<div class="col-lg-8 col-sm-8 col-12">
			@foreach($handbook as $hb)
			<div class="card mb-4">
				<div class="row no-gutters">
				    <div class="col-md-4">
				     	<img src="img/{{$hb->image}}" class="card-img" alt="...">
				    </div>
				    <div class="col-md-8">
				      	<div class="card-body">
					        <h4 class="card-title">{{$hb->title}}</h4>
					        <p class="card-text">
					        	<small class="text-muted">
					        		<i class="far fa-clock"></i>{{date_format($hb->created_at, "Y-m-d")}}
					        	</small>
					        </p>
				        	<p class="card-text">{{$hb->short_description}}[...]</p>
				      	</div>
				    </div>
				</div>
			</div>
			@endforeach

			<div align="center">{{$handbook->links()}}</div>

			@include('layouts.like-share-cmt')
		</div>

		@include('layouts.advertise')
	</div>
</div>

@endsection