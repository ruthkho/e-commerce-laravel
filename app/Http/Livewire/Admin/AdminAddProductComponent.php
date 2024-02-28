<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $featured;
    public $image;
    public $category_id;
    public $occasion_id;
    public $flower_id;

    public function mount(){
        $this->featured = 0;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:products',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,png,jpg',
            'category_id' => 'required',
            'occasion_id' => 'required',
            'flower_id' => 'required'
        ]);
    }

    public function addProduct(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,png,jpg',
            'category_id' => 'required',
            'occasion_id' => 'required',
            'flower_id' => 'required'
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->featured = $this->featured;

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;

        $product->category_id = $this->category_id;
        $product->occasion_id = $this->occasion_id;
        $product->flower_id = $this->flower_id;

        $product->save();
        session()->flash('message','Product has been created successfully.');
    }

    public function render()
    {
        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        // return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories,'occasions'=>$occasions,'flowers'=>$flowers])->layout('layouts.adminbase');

    }
}
