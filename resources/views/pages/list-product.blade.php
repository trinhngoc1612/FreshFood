@extends('index')
@section('content')

@include('layouts.big-img')

<div class="container" id="category">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-12">
			<h4>Thực phẩm</h4>
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
	
	<div class="row justify-content-center" id="card_box">
		@foreach($product as $pr)
		<form method="post" action="{{URL::to('save-cart')}}" class="col-lg-3 col-md-4 col-sm-6 col-12 ">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="card">
					<input type="text" hidden="true" name="id" value="{{$pr->id}}">
				  	<div class="box-img">
				  		<a href="{{url('product', $pr->id)}}">
				  			<img src="img/{{$pr->image}}" class="card-img-top" alt="xa_lach">
				  		</a>
				  		@if($pr->price_sale >0)
				  			<button class="btn btn-success" style="position: absolute;top: 20px;right: 0;">Sale</button>
				  		@endif
				  	</div>
				  	<div class="card-body">
					    <a href="{{url('product', $pr->id)}}">
					    	<h5 class="card-title">{{$pr->name}}</h5>
					    </a>
					    @if($pr->price_sale >0)
					    	<p class="card-text" style="text-decoration: line-through; display: inline-block;">{{number_format($pr->price)}} VNĐ</p>
					    	<p class="card-text" style="display: inline-block;">{{number_format($pr->price_sale)}} VNĐ</p>
					    @else
					    	<p class="card-text">{{number_format($pr->price)}} VNĐ</p>
					    @endif
					    <button type="submit" class="btn btn-fefault cart">
								<i class="fa fa-shopping-cart"></i>
								Thêm giỏ hàng
							</button>
					    
						</div>
				</div>
			
		</form>
		@endforeach
		
	</div>
	<div align="center">{{$product->links()}}</div>
	<br>
</div>

@endsection