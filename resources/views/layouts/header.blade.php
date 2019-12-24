<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light  " >
		    <div style="display: flex;"><a class="" href="#">
		    	<img src="img/logo.png">
		    </a></div>
			
			<div class="two-icon">
		    	<a class="nav-link icon" href="#"><i class="fa fa-search"></i></a>
		    	<a href="#" class="nav-link icon"><span class="fa fa-cart-arrow-down"></span><span class="badge badge-dark">3</span></a>
		    </div>
		    <div style=""><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    	MENU
		    </button></div>
		    <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">
		        <ul class="navbar-nav">
		            <li class="nav-item active">
		                <a class="nav-link" href="{{url('home')}}">Trang chủ<span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="{{url('list-product')}}">sản phẩm</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="{{url('meat')}}">thịt tươi</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="{{url('product')}}">rau sạch</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#">quả ngọt</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="{{url('handbook')}}">cẩm nang</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#">liên hệ</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="{{url('shopping-cart')}}">thanh toán</a>
		            </li>
		            <li class="nav-item nav-item-icon" id="icon-search">
		                <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
		            </li>
		            <li class="nav-item nav-item-icon">
		                <a href="#" class="nav-link"><span class="fa fa-cart-arrow-down"></span><span class="badge badge-dark">3</span></a>
		            </li>
		        </ul>

		        <div class="form-search">
		        	<form method="post" action="{{url('search')}}">
		        		{{csrf_field()}}
		        		<input type="text" name="keyword" placeholder="Search">
		        		<button type="submit" class=""><i class="fa fa-search"></i></button>
		        	</form>
		        	
		        </div>
		    </div>
		</nav>
	</div>
</header>

<div id="space"></div>