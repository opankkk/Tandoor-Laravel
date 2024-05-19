<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Produk;

class OrdersController extends Controller
{
  public function add($productId)
  {
    $product = Produk::find($productId);

    if (!$product) {
      abort(404);
    }

    $order = new Order;
    $order->user_id = auth()->id();
    $order->produk_id = $product->id;
    $order->save();

    return redirect()->back()->with('success', 'Product added to order successfully!');
  }

  public function index()
  {
    $orders = Order::with(['user', 'product'])->where('user_id', auth()->id())->get();

    return view('orders', [
      'orders' => $orders,
    ]);
  }

  public function destroy(Order $order)
  {
    $order->delete();

    return redirect('/dashboard/orders')->with('success', 'Product has been deleted!');
  }
}
