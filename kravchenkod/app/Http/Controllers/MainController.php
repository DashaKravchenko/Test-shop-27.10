<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class MainController extends Controller
{
  
    public function index(){
        $categories = Category::with('products')->get();
        $products = Product::with('category')->where('recommended', '=', 1)->get();
        $title = 'Test shop';
        return view('main.index', compact('title','products', 'categories'));
    }


     public function category(string $slug){
      
      $categories = Category::with('products')->get();
      $category = Category::firstWhere('slug', $slug);
      $products = Product::where('category_id', $category->id)->paginate(9);
      return view('shop.category', compact('category','categories', 'products'));
  }
  
  
  
  public function product(string $slug){
      $categories = Category::with('products')->get();
      $product =  Product::firstWhere('slug', $slug);
      return view('shop.product', compact( 'product',  'categories'));
  }
  







}
