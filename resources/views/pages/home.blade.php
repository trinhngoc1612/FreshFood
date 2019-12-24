@extends('index')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div align="center">
		<div id="brand-name">
			<span>&nbsp; - Fresh Food - &nbsp;</span>
		</div>
	</div>
  	<ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  	</ol>

  	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/brand_img.png" class="d-block w-100" alt="brand_img1">
	    </div>
	    <div class="carousel-item">
	      <img src="img/brand_img.png" class="d-block w-100" alt="brand_img2">
	    </div>
	    <div class="carousel-item">
	      <img src="img/brand_img.png" class="d-block w-100" alt="brand_img3">
	    </div>
  	</div>

  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
  	</a>
</div>

<div class="container menu">
	<div class="row">
		<div class="col-md-4 col-12 box-menu" align="center">
			<div class="box-border">
				<div class="text-in">
					thực phẩm
				</div>
			</div>
			<img src="img/download3.jpg">
		</div>
		<div class="col-md-4 col-12 box-menu" align="center">
			<div class="box-border">
				<div class="text-in">
					rau sạch
				</div>
			</div>
			<img src="img/download2.jpg">
		</div>
		<div class="col-md-4 col-12 box-menu" align="center">
			<div class="box-border">
				<div class="text-in">
					trái cây
				</div>
			</div>
			<img src="img/download3.jpg">
		</div>
	</div>
</div>

<div id="new_good">
	<p class="title">thực phẩm mới nhất</p>
	<div align="center" style="margin-bottom: 30px;"><img src="img/leaf.png"></div>
	
	<div class="container" align="center">
		<div class="owl-carousel owl-theme owl-loaded">
			<div class="owl-stage-outer">
				<div class="owl-stage">
					@foreach($product as $pr)
					<div class="owl-item">
						<div class="card">
						  	<div class="box-img">
						  		<img src="img/{{$pr->image}}" class="card-img-top" alt="xa_lach">
						  	</div>
						  	<div class="card-body">
							     <h5 class="card-title">{{$pr->name}}</h5>
							    <p class="card-text">{{number_format($pr->price)}} VNĐ</p>
							    <a href="#" class="card-link">Thêm vào giỏ hàng</a>
								</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" id="camNang" align="center">
	<strong class="title">cẩm nang nấu ăn</strong>
	<div align="center" class="bowl-center"><img src="img/cam_nang.png"></div>

	<div class="row">
		@foreach($handbook as $hb)
		<div class="col-lg-4 col-sm-6 col-12" align="center">
			<img src="img/{{$hb->image}}">
			<strong>{{$hb->title}}</strong>
			<p>{{$hb->short_description}} [...]</p>
		</div>
		@endforeach
	</div>
</div>


@endsection