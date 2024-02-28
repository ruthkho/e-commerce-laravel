<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;

class OccasionComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $occasion_slug;

    public $min_price;
    public $max_price;

    public function mount($occasion_slug){
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->occasion_slug = $occasion_slug;

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
        $occasion = Occasion::where('slug', $this->occasion_slug)->first();
        $occasion_id = $occasion->id;
        $occasion_name = $occasion->name;

        if($this->sorting=='date'){
            $products = Product::where('occasion_id', $occasion_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price"){
            $products = Product::where('occasion_id', $occasion_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting="price-desc"){
            $products = Product::where('occasion_id', $occasion_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::where('occasion_id', $occasion_id)->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }

        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        // return view('livewire.shop-component', ['products' => $products,'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout("layouts.base");
        // return view('livewire.occasion-component', ['products' => $products,'occasions'=>$occasions, 'occasion_name'=>$occasion_name])->layout("layouts.base");
        return view('livewire.shop-component', ['products' => $products,'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout("layouts.base");
    }
}



