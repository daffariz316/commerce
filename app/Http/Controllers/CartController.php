<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use TCPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{

    public function addToCart(Request $request)
    {
        // Validasi permintaan
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil pengguna yang terautentikasi
        $user = Auth::user();

        // Tambahkan item ke keranjang belanja
        Cart::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }
    

}
