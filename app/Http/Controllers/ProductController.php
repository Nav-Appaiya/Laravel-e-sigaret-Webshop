<?php
/**
 * Created by PhpStorm.
 * User: Nav
 * Date: 05-06-16
 * Time: 08:53
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Symfony\Component\DomCrawler\Form;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();

        return view('admin.products.products',[
            'products' => $products,
            'meta' => array('meta1', 'meta2', 'meta3')
        ]);
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/admin/products');
    }

    public function edit($id){

        $product = Product::findOrFail($id);

        // show the edit form and pass the nerd
        return view('admin.products.edit', [
            'product' => $product
        ]);

    }

    public function newProduct(){
        return view('admin.products.new');
    }

    public function add(Product $id) {
        if(!isset($id->name)){
            $product = new Product();
            $product->save();
            Session::flash('message', 'Creating new product');
        }
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->price = Input::get('price');
        $product->imageurl = Input::get('imageurl');
        $product->save();
        Session::flash('message', 'Successfully updated product!');
        return redirect('/admin/products');

    }

    public function detail(Product $id)
    {
        $related = Product::all();
        
        return view('products.detail', [
            'product' => $id,
            'related' => $related
        ]);
    }
}

