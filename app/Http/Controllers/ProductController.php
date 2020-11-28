<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    //
    function index() {
        $data = Product::all();
        
        return view('product', ['products' => $data]);
    }
    function detail($id) {
        $data =  Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req) {
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['products' => $data] );  
        // return $data;
    }
    function addToCart(Request $req) {
        if(Auth::user() != null){
            $cart = new Cart;
            $cart->user_id = Auth::id();
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else {
            return redirect('login');
        }
    }
    static function cartItem() {
        $userId = Auth::id();
        return Cart::where('user_id', $userId)->count();
    }
    function cartList() {
        $userId = Auth::id();
        $data = DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->select('products.*', 'cart.id as cart_id')
        ->where('cart.user_id', $userId)
        ->get();
        return view('cartlist', ['products' => $data]);
    }
    function removeCart($id) {
        Cart::destroy($id); 
        return redirect('cartlist');
    }
    function orderNow() {
        $userId = Auth::id();
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req) {
        $userId = Auth::id();
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->save();
        }
        Cart::where('user_id', $userId)->delete();
        return redirect('/');
    }
    function myOrder() {
        $userId = Auth::id();
        $orders =  DB::table('orders')
        ->join('products', 'orders.product_id', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();
        return view('myorder', ['orders' => $orders]);
    }
    function removeProduct($id) {
        Product::destroy($id);
        return redirect('/admin/barang');
    }
    function adminListBarang() {
        $data = Product::all();
        return view('admin.listbarang', ['products' => $data]);
    }
}
