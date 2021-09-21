<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
    static function cartItem(){
        // $user_Id = Session::get('user')['id'];
        $user_Id = session()->get('user')->id;
        return Cart::where('user_id',$user_Id)->count();
    }  
    function cartlist(){
        //  echo "Hello";
        $userId = Session::get('user')->id;
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*')
        ->get();

        return view('cartlist',['products' => $products]);

    }
}
