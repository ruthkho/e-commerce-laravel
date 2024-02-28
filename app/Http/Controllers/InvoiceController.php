<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use PDF;

class InvoiceController extends Controller
{
    public function generatePDF($order_id){
        $orders = Order::find($this->order_id);

        return view('invoiceDetails',compact('orders'));
    }

    public function downloadPDF($order_id){
        $orders = Order::find($this->order_id);
        $pdf = PDF::loadView('invoiceDetails',compact('orders'));
        return $pdf->download('invoice.pdf');
    }

    // public function generatePDF(){
    //     $orders = Order::all();

    //     return view('invoiceDetails',compact('orders'));
    // }

    // public function downloadPDF(){
    //     $orders = Order::all();
    //     $pdf = PDF::loadView('invoiceDetails',compact('orders'));
    //     return $pdf->download('invoice.pdf');
    // }
}
