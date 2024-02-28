<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product has been deleted successfully.');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $products = Product::where('name','LIKE',$search)
                            ->orwhere('id','LIKE',$search)
                            ->orwhere('regular_price','LIKE',$search)
                            ->orwhere('description','LIKE',$search)
                            // ->orwhere('category_id','LIKE',$search)
                            // ->orwhere('occasion_id','LIKE',$search)
                            // ->orwhere('flower_id','LIKE',$search)
                            ->orderBy('id','DESC')->paginate(10);


        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.adminbase');
    }
}
