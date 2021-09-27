<?php



namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function AddCart(Request $request)
    {
        if (Auth::user()) {
            $cart = new Cart();
            $cart->user_id = auth()->id();
            $cart->article_id = $request->article_id;
            $cart->save();
        } else {
            return redirect('login');
        }
    }

    public function MesCommandes()
    {
        $cart = Cart::content();
        return view('product.cart', compact('cart'));
    }
}
