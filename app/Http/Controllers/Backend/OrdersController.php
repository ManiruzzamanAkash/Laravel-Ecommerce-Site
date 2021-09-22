<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Order;
use PDF;

class OrdersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
  
  public function index()
  {
    $orders = Order::orderBy('id', 'desc')->get();
    return view('backend.pages.orders.index', compact('orders'));
  }  

  public function show($id)
  {
    $order = Order::find($id);
    $order->is_seen_by_admin = 1;
    $order->save();
    return view('backend.pages.orders.show', compact('order'));
  }

  public function completed($id)
  {
    $order = Order::find($id);
    if ($order->is_completed) {
      $order->is_completed = 0;
    }
    else {
      $order->is_completed = 1;
    }

    $order->save();
    session()->flash('success', 'Order completed status changed ..!');
    return back();
  }

  public function chargeUpdate(Request $request, $id)
  {
    $order = Order::find($id);
    
    $order->shipping_charge = $request->shipping_charge;
    $order->custom_discount = $request->custom_discount;
    $order->save();
    session()->flash('success', 'Order charge and discount has changed ..!');
    return back();
  }

  /**
   * generate Invoice
   * 
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  public function generateInvoice($id)
  {
  	$order = Order::find($id);
  	
    //return view('backend.pages.orders.invoice', compact('order'));

    $pdf = PDF::loadView('backend.pages.orders.invoice', compact('order'));
    
    return $pdf->stream('invoice.pdf');
    //return $pdf->download('invoice.pdf');
  }

  public function paid($id)
  {
  	$order = Order::find($id);
  	if ($order->is_paid) {
  		$order->is_paid = 0;
  	}
  	else {
  		$order->is_paid = 1;
  	}
  	$order->save();
  	session()->flash('success', 'Order paid status changed ..!');
  	return back();
  }

}
