<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    function index() {

        $data =  Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id) {
        
        $data =  Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req) {
        
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function addToCart(Request $req) {

        if($req->session()->has('user')) {

            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('cartlist');;
        }
        else {
            return redirect('/login');
        } 
    }

    static function cartItem() {

        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList() {

        $userId = Session::get('user')['id'];
        $data = DB::table('cart')

            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();

        return view('cartlist', ['products'=>$data]);
    }

    function removeCart($id) {

        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow() {

        $userId = Session::get('user')['id'];
        $total = DB::table('cart')

            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total'=>$total]);
    }

    function orderPlace(Request $req) {

        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart) {
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status='pending';
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->save();
        }   
        Cart::where('user_id', $userId)->delete();

        if($order['payment_method'] == 'payment') {
            $email = $userId;
            $message_data = [
                'email' =>  $email,
                'name'  =>  $name,
                'order_id' =>  $cart,
            ];
            Mail::send('thanksemail', $message_data, function ($message) use($email){
                $message->to(User::where(['email'=>$req->email])->first())->subject('Your Oreder From Clothing Has Been Placed');
            });
        }
        return redirect('/');
    }

    function myOrder() {

        $userId = Session::get('user')['id'];
        $orders =  DB::table('orders')

            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorder', ['orders'=>$orders]);
    }
}