<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;

class FlowerComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $flower_slug;

    public $min_price;
    public $max_price;

    public function mount($flower_slug){
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->flower_slug = $flower_slug;

        $this->min_price = 1;
        $this->max_price = 1000;
    }

    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function addToWishList($product_id, $product_name, $product_price){
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
    }

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    use WithPagination;
    public function render()
    {
        $flower = Flower::where('slug', $this->flower_slug)->first();
        $flower_id = $flower->id;
        $flower_name = $flower->name;

        if($this->sorting=='date'){
            $products = Product::where('flower_id', $flower_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price"){
            $products = Product::where('flower_id', $flower_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting="price-desc"){
            $products = Product::where('flower_id', $flower_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::where('flower_id', $flower_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }

        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        // return view('livewire.shop-component', ['products' => $products,'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout("layouts.base");
        // return view('livewire.flower-component', ['products' => $products,'flowers'=>$flowers, 'flower_name'=>$flower_name])->layout("layouts.base");
        return view('livewire.shop-component', ['products' => $products,'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout("layouts.base");
    }
}



