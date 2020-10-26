<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Product;
use App\Category;
class CartController extends Controller
{

    public function cart(){
                    
        return view('shop.cart');
    }

    public function add(Request $request){

        $product = Product::find($request->product_id);
        //добавить в сессию, обновить представление корзины
        $cart = new CartService();
        $cart->add($product, $request->qty);
        return view('shop._cart');
    }



    public function clear(){
        CartService::clear();
        
        return view('shop._cart');
    }




public function remove(Request $request){
    CartService::remove($request->product_id);
    return view('shop._cart');
}



public function shipping(){
    return view('shop.shipping');
}

public function endShipping(){
    
$order = new Order();
$order->user_id = \Auth::user()->id;
$order->total_sum = session('totalSum');

$order->save();

foreach(session('cart') as $product){
    $item= new OrderItems();
    $item->name = $product['name'];
    $item->price = $product['price'];
    $item->img = $product['img'];
    $item->qty = $product['qty'];
    $item->description = $product['description'];
    $item->order_id = $order->id;
    $item->save();
}

  CartService::clear();
 
return redirect('/')->with('success', 'Thank!');

}









}
