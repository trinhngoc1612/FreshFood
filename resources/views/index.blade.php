<!DOCTYPE html>
<html>
<head>
	<title>Fresh Food</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- fontawesome -->
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<!-- owl carousel -->
	<link rel="stylesheet" href="OwlCarousel2/dist/assets/owl.carousel.min.css">

	<!-- my style -->
	<link rel="stylesheet" type="text/css" href="style_Header.css">
	<link rel="stylesheet" type="text/css" href="style_Home.css">
	<link rel="stylesheet" type="text/css" href="style_Big-img.css">
	<link rel="stylesheet" type="text/css" href="style_Shopping-cart.css">
	<link rel="stylesheet" type="text/css" href="style_List-product.css">
	<link rel="stylesheet" type="text/css" href="style_Product.css">
	<link rel="stylesheet" type="text/css" href="style_Advertise.css">
	<link rel="stylesheet" type="text/css" href="style_Like-share-cmt.css">
	<link rel="stylesheet" type="text/css" href="style_Handbook.css">
	<link rel="stylesheet" type="text/css" href="style_Footer.css">

</head>
<body>
	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="OwlCarousel2/dist/owl.carousel.min.js"></script>
<script src="jquery-mousewheel-master/jquery.mousewheel.min.js"></script>

<script src="carousel.js"></script>
<script src="jquery.js"></script>
<script src="promise.js"></script>
</body>
</html>