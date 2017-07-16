<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    public function getIndex()
    {   
    	 $products = Product::all();
    	 return view('shop.index',['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){

    	 $product = Product::find($id);
    	 Cart::add($product->id,$product->title,1,$product->price);
    	 //return Cart::content();
    	// $oldCart = Session::has('cart') ? Session::get('cart') : null;
    	
    	// $cart    = new Cart($oldCart);
    	// $c = $cart->add($product,$product->$id);
    	// dd($cart);
    	// $request->session()->put('cart',$cart);
    	 return back();
    }

    public function getCart(){
   
   		$carts = Cart::content();
    	return view('shop.shopping-cart',compact('carts'));
     }
}
