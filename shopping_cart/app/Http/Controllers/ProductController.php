<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        // return Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=> $data]);
    }
    function search(Request $request){
        $data = Product:: where('description','like','%'.$request->input('query').'%')->get();
        // return $request->input();
        return view('search',['products'=>$data]);
    }
    function AddtoCart(Request $request){

        if($request->session()->has('user')){
            // return "Hello";
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('login');
        }
    } 
}
