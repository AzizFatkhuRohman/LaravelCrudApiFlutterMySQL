<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;

class productsController extends Controller
{
    public function select(){
        $products = productModel::all();
        $title = 'Select Products';
        return view('products.select', compact(['products', 'title']));
    }
    public function insert(){
        $title ='Insert Products';
        return view('products.insert', compact(['title']));
    }
    public function afterInsert(Request $request){
        productModel::create($request->all());
        return redirect('/products');
    }
    public function update($id){
        $title = 'Update Products';
        $products = productModel::find($id);
        return view('products.update', compact(['products','title']));
    }
    public function afterUpdate(Request $request,$id){
        $products = productModel::find($id);
        $products->update($request->all());
        return redirect('/products');
    }
    public function delete($id){
        $products = productModel::find($id);
        $products->delete();
        return redirect('/products');
    }
}
