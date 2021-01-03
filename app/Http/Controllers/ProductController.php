<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;

class ProductController extends Controller
{
    public function index(){
    	$new_products = Product::where('new',1)
    	->orderBy('created_at','desc')
    	->get();

        $all_products = Product::all();

    	return view('ban-banh.index',array(
    		'new_products' => $new_products,
            'all_products' => $all_products,
    	));
    }

    public function getProducts($id_type){
    	//get all products from products table
        $type_product = Type::all();
        $type_name = Type::find($id_type)->name;
    	$products = Product::where('id_type',$id_type)->get();
    	// foreach ($products as $key => $value) {
    	// 	echo $key . ' - ' . $value->name . '<br>';
    	// }
        return view('ban-banh.products',array(
            'products' => $products,
            'type' => $type_product,
            'type_name' => $type_name,
        ));
    }

    public function getProductDetail($id_product){
        $product = Product::find($id_product);
        if($product){
            return view('ban-banh.product_detail',array(
                'product' => $product
            ));
        }else{
            return redirect()->back();
        }
    }
}
