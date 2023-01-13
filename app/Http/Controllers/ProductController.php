<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $items =  Product::all();
        return view('products.index',compact('items'));
    }
    public function store()
    {
        $data = request()->all();
        $rules = [
            'product_name'=>'required|unique:products,name|max:255',
            'qty'=>'required|numeric|min:1',
            'price'=>'required|numeric|min:1',
        ];
        $validator = Validator($data,$rules);
        if($validator->fails()){
            return response()->json(['success'=>false,'type'=>'validator', 'data'=> $validator->errors()]);
        }
    
        $product  = new Product();
        $product->name =  request('product_name');
        $product->qty =  request('qty');
        $product->price =  request('price');
        $product->save();
        return response()->json(['success'=>true,'view'=>view($view,['item'=>$product])->render(), 'data'=> 'add successfully']);
    }
}
