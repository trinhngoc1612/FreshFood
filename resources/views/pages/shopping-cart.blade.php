@extends('index')
@section('content')

@include('layouts.big-img')

<div id="main_table"><div class="container">
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th class ="maSP">Mã sản phẩm</th>
			<th>Ảnh</th>
			<th class ="tenSP">Tên sản phẩm</th>
			<th class="title">Số lượng</th>
			<th class="title">Giá</th>
			<th class="title">Tổng</th>
			<th class="title">Thao tác</th>
		</tr>
		<tr>
			<td>Fre0001</td>
			<td><img src="img/ca_hoi.png"></td>
			<td>Cá hồi bắc âu</td>
			<td><input type="text" value="1" name=""> Kg</td>
			<td>250.000đ</td>
			<td>250.000đ</td>
			<td>Xoá</td>
		</tr>
		<tr>
			<td>Fre0001</td>
			<td><img src="img/ca_hoi.png"></td>
			<td>Cá hồi bắc âu</td>
			<td><input type="text" value="1" name=""> Kg</td>
			<td>250.000đ</td>
			<td>250.000đ</td>
			<td>Xoá</td>
		</tr>
		<tr>
			<td colspan="7">
				<div id="col-L"><strong>Tổng: 500.000đ</strong></div>
				<div id="col-R">
					<button class="btn btn-success">Cập nhật giỏ hàng</button>
					<button class="btn btn-success">Xóa giỏ hàng</button>
					<button class="btn btn-success">Đặt mua & thanh toán</button>
				</div>
			</td>
		</tr>
	</table>
</div></div>

<form><div class="container">
	<h4 id="datHang_thanhToan">Đặt hàng và thanh toán</h4>
	<div class="form-group">
		<label>Email:</label>
		<input type="text" class="form-control" name="">
	</div>
	<div class="form-group">
		<label>Họ và tên:</label>
		<input type="text" class="form-control" name="">
	</div>
	<div class="form-group">
		<label>Điện thoại:</label>
		<input type="text" class="form-control" name="">
	</div>
	<div class="form-group">
		<label>Địa chỉ:</label>
		<input type="text" class="form-control" name="">
	</div>
	<input type="submit" class="btn btn-success submit" value="Áp dụng">
</div></form>

@endsection