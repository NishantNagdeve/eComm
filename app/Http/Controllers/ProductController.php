<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use DB;

class ProductController extends Controller
{
    //
    function index (Request $req){
        $data = Product::all();
        return view('product', ['products'=>$data]);
    }

    function product_detail($id)
    {
        $detail = Product::find($id);
        return view('product-detail', ['product'=>$detail]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else
        {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        if(session()->has('user'))
        {
            $userId = Session::get('user')['id'];
            return Cart::where('user_id', $userId)->count();
        }else{
            return 0;
        }
    }

    function Search(Request $req)
    {
        $data = Product::where('name', 'like', '%'.$req->input('query').'%',)->get();
        return view('search', ['products'=>$data]);
    } 

    function cartList()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('carts')
                    ->join('products', 'carts.product_id', '=', 'products.id')
                    ->where('carts.user_id', $userId)
                    ->select('products.*', 'carts.id as cart_id', 'carts.product_id as product_id')->get();
        return view('cartlist', ['product' => $products]);        
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }

}