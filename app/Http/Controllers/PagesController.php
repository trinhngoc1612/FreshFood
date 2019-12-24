<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListProduct;
use App\Handbook;

class PagesController extends Controller
{
	public function getHome() {
		$product = ListProduct::all();
		$handbook = Handbook::where('id','>','0')->take(3)->get();
		return view('pages.home', ['product'=> $product, 'handbook' => $handbook] );
	}
	public function getShoppingcart() {

		return view('pages.shopping-cart');
	}
	public function getListproduct() {
		$product = ListProduct::where('id','>','0')->paginate(8);
		// dd(count($product));
		return view('pages.list-product', ['product' => $product]);
	}

	public function getMeat() {
		$product = ListProduct::where('type',"meat")->paginate(4);
		// dd(count($product));
		return view('pages.meat', ['product' => $product]);
	}

	public function getProduct($id){
		$product = ListProduct::find($id);
		return view('pages.product', ['product' => $product]);
	}
	public function getHandbook(){
		$handbook = Handbook::where('id','>','0')->paginate(5);
		
		// $test = Handbook::where('id','>','0')->first();

		// dd(date_format($test->date,"Y-m-d H:i:s"));
		return view('pages.handbook',['handbook' => $handbook]);
	}
	public function postSearch(Request $request){
		$keyword = $request->keyword;
		$ketqua = ListProduct::where('name','like',"%$keyword%")->orWhere('price', $keyword)->paginate(4);
		return view('pages.search', ['keyword' => $keyword, 'ketqua' => $ketqua]);
	}

}
