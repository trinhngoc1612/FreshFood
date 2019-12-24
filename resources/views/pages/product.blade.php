@extends('index')
@section('content')
 
@include('layouts.big-img')

<div class="container" id="product">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-12 row_box">
			<div class="card mb-3">
			  	<div class="row no-gutters">
				    <div class="col-sm-6">
				      	<img src="img/{{$product->image}}" class="card-img" alt="ca_hoi">
				    </div>
				    <div class="col-sm-6">
				      	<div class="card-body">
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>
				      		<span class="fa fa-star"></span>

					        <h4 class="card-title">{{$product->name}}</h4>
					        <p class="card-text">
					        	<small>Mã sản phẩm: Fre0001</small>
					        </p>
					        <p class="card-text">
					        	<small>Post on: {{date_format($product->created_at, "Y/m/d")}}</small>
					        </p>
					        <h5 class="card-title">{{number_format($product->price)}} VNĐ</h5>
					        <br>
					        <p class="card-text card-text-box">{{$product->description}}</p>
					        <br>
					        <button class="btn btn-success">THÊM VÀO GIỎ HÀNG</button>
				      	</div>
			    	</div>
			  	</div>
			</div>

			<div id="info_product">
				<h4>Thông tin sản phẩm:</h4>
				<p>
					Tôi luôn khuyên khách hàng của mình trả thêm tiền cho một sản phẩm chất lượng.<br>
					Với tôi:<br>
					"Cá hồi không phải là loại thực phẩm nên tìm mua dễ dãi, nhất định phải tìm đên những cơ sở uy tín, và tốt nhất ăn cá hồi mổ trong ngày"<br>
					Cá hồi ở CleverFood được nhập khẩu trực tiếp từ Leroy.Cá hồi của Leroy đã được chứng nhận về:<br>
					+ MSC (Marine Stewardshop Council): Đạt tiêu chuẩn đánh bắt bền vững đối với thủy hải sản tự nhiên.<br>
					+ Global Gap Aquaculture Standard: Tiêu chuẩn an toàn thực phẩm Global Gap toàn cầu<br>
				</p>
				<div align="center" class="ca-hoi-bac-au">
					<img src="img/ca_hoi_bac_au.png">
				</div>
				<p>
					+ Cá hồi (Salmon) sinh sống dọc các bờ biển tại Bắc Đại Tây Dương (các họ di cư Salmo salar) và Thái Bình Dương (khoảng sáu họ của giống Oncorhynchus),cũng đã từng được đưa tới Hồ lớn ở Bắc Mỹ. Cá hồi được sản xuất nhiều trong ngành nuôi trồng thủy sản ở nhiều nơi trên thế giới.<br>
					+ Cá hồi có ở nhiều nơi trên thế giới,tuy nhiên theo đánh giá của những chuyên gia ẩm thực nổi tiếng thì cá hồi NaUy cho chất lượng tốt nhất.Cá hồi ở NaUy sống trong môi trường hoàn toàn tự nhiên,trong sạch sản phẩm được người dân bản địa sử dụng trong bữa ăn hàng ngày.Khi một thị trường khó tính như NaUy đã chấp nhận thì khó có một đất nước thứ 2 nào trên thế giới lại có thể chê bai sản phẩm đó.Cá hồi của chúng tôi được nhập khẩu trực tiếp qua đường bay về Việt Nam trong ngày,sản phẩm được bảo quản cẩn thận đảm bảo tươi sống nhất thị trường.
				</p>
			</div>

			<div align="center">
				<div class="btn-group">
					<button class="btn btn-danger">1</button>
					<button class="btn btn-danger">2</button>
					<button class="btn btn-danger">3</button>
				</div>
			</div><br><br>

			@include('layouts.like-share-cmt')
		</div>

		@include('layouts.advertise')
	</div>
</div>

@endsection