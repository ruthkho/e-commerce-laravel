<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\HomeCategory;
use App\Models\HomeOccasion;
use App\Models\HomeFlower;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);

        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;

        // $occasion = HomeOccasion::find(1);
        // $occas = explode(',', $occasion->sel_occasions);
        // $occasions = Occasion::whereIn('id',$occas)->get();
        // $no_of_products = $occasion->no_of_products;

        // $flower = HomeFlower::find(1);
        // $flows = explode(',', $flower->sel_flowers);
        // $flowers = Flower::whereIn('id',$flows)->get();
        // $no_of_products = $flower->no_of_products;

        return view('livewire.home-component',['sliders'=>$sliders, 'lproducts'=>$lproducts, 'categories'=>$categories, 'no_of_products'=>$no_of_products])->layout('layouts.base');
        // return view('livewire.home-component',['sliders'=>$sliders, 'lproducts'=>$lproducts, 'no_of_products'=>$no_of_products, 'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout('layouts.base');
    }
}
