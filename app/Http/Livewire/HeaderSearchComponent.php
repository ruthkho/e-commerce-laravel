<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;
    public $product_occa;
    public $product_occa_id;
    public $product_flow;
    public $product_flow_id;

    public function mount(){
        $this->product_cat = 'All Category';
        $this->product_occa = 'All Occasion';
        $this->product_flow = 'All Flower';
        // $this->fill(request()->only('search','product_cat', 'product_cat_id'));
        $this->fill(request()->only('search','product_cat', 'product_cat_id', 'product_occa', 'product_occa_id', 'product_flow', 'product_flow_id'));
    }

    public function render()
    {
        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        // return view('livewire.header-search-component',['categories'=>$categories]);
        return view('livewire.header-search-component',['categories'=>$categories,
                                                        'occasions'=>$occasions,
                                                        'flowers'=>$flowers]);
    }
}
