<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Products;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(4);
        $articles = Articles::paginate(3);
        
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            if (!$cart) {
                $cart = Cart::create(['user_id' => Auth::id()]);
            }
            $cartItems = $cart->cartItems ?? collect(); 
            $totalAmount = $cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->price;
            });
        
        } else {
            $cartItems = collect();  
            $totalAmount = 0;  
        }
        $totalQuantity = $cartItems->sum('quantity');

        return view('welcome', compact('products', 'articles', 'cartItems', 'totalAmount','totalQuantity'));
        
    }
    public function introduction()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            if (!$cart) {
                $cart = Cart::create(['user_id' => Auth::id()]);
            }
            $cartItems = $cart->cartItems ?? collect(); 
            $totalAmount = $cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->price;
            });
        
        } else {
            $cartItems = collect();  
            $totalAmount = 0;  
        }
        $totalQuantity = $cartItems->sum('quantity');
        return view('introduction.introduction', compact('totalAmount','totalQuantity'));
    }
    public function products()
    {
        $products = Products::paginate(4);
        $articles = Articles::paginate(3);
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            if (!$cart) {
                $cart = Cart::create(['user_id' => Auth::id()]);
            }
            $cartItems = $cart->cartItems ?? collect(); 
            $totalAmount = $cartItems->sum(function ($cartItem) {
                return $cartItem->quantity * $cartItem->price;
            });
        
        } else {
            $cartItems = collect();  
            $totalAmount = 0;  
        }
        $totalQuantity = $cartItems->sum('quantity');
        return view('products.products', compact('products', 'articles', 'cartItems', 'totalAmount','totalQuantity'));
        
    }

    public function add(Products $product)
    {
        if (Auth::check()) {
            $userId = Auth::id(); 
            $cart = Cart::firstOrCreate(['user_id' => $userId]);
            $cartItem = CartItem::where('cart_id', $cart->id)
                                ->where('product_id', $product->id)
                                ->first();
            if ($cartItem) {
                $cartItem->quantity += 1; 
                $cartItem->save();
            } else {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'quantity' => 1, 
                    'price' => $product->sale_price, 
                ]);
            }
        } else {
            $cartItems = session('cart', []);
            $cartItems[] = [
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price,
            ];
            session(['cart' => $cartItems]);
        }
        return redirect()->back();
    }
    
    public function removeFromCart($id)
    {
    $cartItem = CartItem::find($id);
    if ($cartItem) {
        $cartItem->delete(); 
    }
    return redirect()->back();
    }


    
    

    public function show(string $id)
    {
        
    }


}
