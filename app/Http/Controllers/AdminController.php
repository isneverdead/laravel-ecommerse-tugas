<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


class AdminController extends Controller
{
    //
    function category() {
        $data = Category::all();
        
        return view('admin.category', ['data' => $data]);    }
    function addCategory(Request $req) {
        if(Auth::user() != null){
            $category = new Category;
            $category->category = $req->category;
            $category->save();
            return redirect('/admin/category');
        }
    }
    function listCategory(){
        $data = Category::all();
        
        return view('admin.category', ['data' => $data]);
    }
    function removeCategory($id) {
        Category::destroy($id); 
        return redirect('/admin/category');
    }
    public function adminAddProduct() {
        $data = Category::all();
        return view('admin.addproduct', ['data' => $data]);
    }
}
