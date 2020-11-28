<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        return view('admin.admin');
    }
    
    function addProduct(Request $req) {
        if(auth() != null){
            // echo("jalan");
            $product = new Product;
            $product->name =  $req->namaBarang;
            $product->price = $req->hargaBarang;
            $product->category = $req->kategoriBarang;
            $product->description = $req->deskripsiBarang;
            $product->gallery = $req->urlBarang;
            $product->save();
            return redirect('/admin');
        }
        // $userId = $req->input();
        // return $userId;
    }
}
