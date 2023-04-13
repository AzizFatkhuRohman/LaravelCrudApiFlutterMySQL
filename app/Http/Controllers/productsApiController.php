<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;

class productsApiController extends Controller
{
    public function select(){
        $products = productModel::all();
        return response()->json(['message'=>'succes','data' => $products]);
    }
    public function insert(Request $request){
        $products= productModel::create($request->all());
        return response()->json(['data'=>$products]);
    }
    public function detail($id){
        $products = productModel::find($id);
        return response()->json(['data'=>$products]);
    }
    public function update(Request $request,$id){
        $products = productModel::find($id);
        $products->update($request->all());
        return response()->json(['data'=>$products]);
    }
    public function delete($id){
        $products = productModel::find($id);
        $products->delete();
        return response()->json(['data'=>null]);
    }
}
