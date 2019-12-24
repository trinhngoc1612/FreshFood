<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\ListProduct;

class CartController extends Controller
{
    public function save_cart(Request $request){
    	$product = ListProduct::where('id', $request->id);
    	$data['id'] = $product->id;
      $data['name'] = $product->name;
      $data['price'] = $product->price;
      $data['image'] = $product->image;
      Cart::add($data);
      return Redirect::to('shopping-cart');
    }
}
