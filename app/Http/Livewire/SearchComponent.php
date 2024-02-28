<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public $search;
    public $product_cat;
    public $product_cat_id;
    public $product_occa;
    public $product_occa_id;
    public $product_flow;
    public $product_flow_id;

    public function mount(){
        $this->sorting = "default";
        $this->pagesize = 12;

        $this->min_price = 1;
        $this->max_price = 1000;

        // $this->fill(request()->only('search','product_cat', 'product_cat_id'));
        $this->fill(request()->only('search','product_cat', 'product_cat_id','product_occa', 'product_occa_id','product_flow', 'product_flow_id'));
    }

    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        if($this->sorting=='date'){
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
            // $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')
            //                                                                 ->orWhere('occasion_id','like','%'.$this->product_occa_id.'%')
            //                                                                 ->orWhere('flower_id','like','%'.$this->product_flow_id.'%')
            //                                                                 ->whereBetween('regular_price',[$this->min_price,$this->max_price])
            //                                                                 ->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price"){
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
            // $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')
            //                                                                 ->orWhere('occasion_id','like','%'.$this->product_occa_id.'%')
            //                                                                 ->orWhere('flower_id','like','%'.$this->product_flow_id.'%')
            //                                                                 ->whereBetween('regular_price',[$this->min_price,$this->max_price])
            //                                                                 ->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting="price-desc"){
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
            // $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')
            //                                                                 ->orWhere('occasion_id','like','%'.$this->product_occa_id.'%')
            //                                                                 ->orWhere('flower_id','like','%'.$this->product_flow_id.'%')
            //                                                                 ->whereBetween('regular_price',[$this->min_price,$this->max_price])
            //                                                                 ->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }

        else{
            $products = Product::where('category_id','like','%'.$this->product_cat_id.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
            // $products = Product::where('category_id','like','%'.$this->product_cat_id.'%')
            //                     ->orWhere('occasion_id','like','%'.$this->product_occa_id.'%')
            //                     ->orWhere('flower_id','like','%'.$this->product_flow_id.'%')
            //                     ->whereBetween('regular_price',[$this->min_price,$this->max_price])
            //                     ->paginate($this->pagesize);
        }

        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        return view('livewire.search-component', ['products' => $products,'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout("layouts.base");
        // return view('livewire.search-component', ['products' => $products, 'categories'=>$categories])->layout("layouts.base");
    }
}



