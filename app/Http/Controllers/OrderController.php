<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
        //passing data product
        $product = Product::all();
        //ambil data order berdasarkan user yang sedang login
        $cart =Order::where('user_id', Auth::user()->id)->where('status', '0')->get();
		//redirect to order page
        return view('layouts.order.index', compact('product', 'cart'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $r)
	{
		//jika product blm di pilih
        if ($r->product_id == 0) {
            return redirect()->route('order.index')->with('pesan', 'Anda Belum Memilih Product');
        }
        $product_check = Order::where('product_id', $r->product_id)->where('status', '0')->first();
        $price = Product::where('id', $r->product_id)->first();
        if ($product_check == null) {
            $order = new Order;
            $order->product_id = $r->product_id;
            $order->jumlah = $r->jumlah;
        } else {
            $order = Order::where('product_id', $r->product_id)->where('status', '0')->first();
            $order->product_id = $r->product_id;
            $order->jumlah += $r->jumlah;
        }
        $order->sub_total += $price->price * $r->jumlah;
        $order->user_id = Auth::user()->id;
        $order->save();
        return redirect()->route('order.index');
        // dd($order);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function show(Order $order)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Order $order)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Order $order)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Order  $order
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Order $order)
	{
		//
	}
}
