<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function updateOrderStatus($order_id, $status){
        $order = Order::find($order_id);
        $order->status = $status;
        if($status == "delivered"){
            $order->delivered_date = DB::raw('CURRENT_DATE');
        }
        else if($status == "cancelled"){
            $order->cancelled_date = DB::raw('CURRENT_DATE');
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfully.');
    }

    public function deleteOrder($id){
        $order = Order::find($id);
        $order->delete();
        session()->flash('message','Order has been deleted successfully.');
    }

    public function render()
    {
        // $orders = Order::orderBy('created_at', 'DESC')->paginate(12);

        $search = '%' . $this->searchTerm . '%';
        $orders = Order::where('firstname','LIKE',$search)
                        ->orwhere('id','LIKE',$search)
                        ->orwhere('discount','LIKE',$search)
                        ->orwhere('total','LIKE',$search)
                        ->orwhere('email','LIKE',$search)
                        ->orwhere('zipcode','LIKE',$search)
                        ->orwhere('status','LIKE',$search)
                        ->orwhere('created_at','LIKE',$search)
                        ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-order-component', ['orders'=>$orders])->layout('layouts.adminbase');
    }
}
