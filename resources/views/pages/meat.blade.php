@extends('index')
@section('content')

@include('layouts.big-img')

<div class="container" id="category" align="center">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-12">
			<h4>Thịt tươi</h4>
		</div>
		<div class="col-sm-6 col-12 thuc-pham" align="right">
			<div class="dropdown" align="right">
				  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Lọc giá từ thấp đến cao
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
				    <a class="dropdown-item" style="font-size: 12px;" href="#">Lọc giá từ cao đến thấp</a>
				  </div>
				  <button class="btn btn-dark">Lọc</button>
			</div>
		</div>
	</div>
	
	<div class="row justify-content-center">
		@foreach($product as $pr)
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
				<div class="card">
				  	<div class="box-img">
				  		<img src="img/{{$pr->image}}" class="card-img-top" alt="xa_lach">
				  	</div>
				  	<div class="card-body">
					    <h5 class="card-title">{{$pr->name}}</h5>
					    <p class="card-text">{{$pr->price}} VNĐ</p>
					    <a href="#" class="card-link">Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
		@endforeach	
		
	</div>
	<div align="center" style="display: inline-block;">{{$product->links()}}</div>
	<br>
</div>

@endsection