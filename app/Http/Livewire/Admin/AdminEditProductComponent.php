<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
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
    public $newimage;
    public $product_id;

    public function mount($product_slug){
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->featured = $product->featured;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->occasion_id = $product->occasion_id;
        $this->flower_id = $product->flower_id;
        $this->product_id = $product->id;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'newimage' => 'mimes:jpeg,png,jpg',
            'category_id' => 'required',
            'occasion_id' => 'required',
            'flower_id' => 'required'
        ]);
    }

    public function updateProduct(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'newimage' => 'mimes:jpeg,png,jpg',
            'category_id' => 'required',
            'occasion_id' => 'required',
            'flower_id' => 'required'
        ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->featured = $this->featured;

        if($this->newimage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }

        $product->category_id = $this->category_id;
        $product->occasion_id = $this->occasion_id;
        $product->flower_id = $this->flower_id;

        $product->save();
        session()->flash('message','Product has been updated successfully.');
    }

    public function render()
    {
        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        // return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories,'occasions'=>$occasions,'flowers'=>$flowers])->layout('layouts.adminbase');
    }
}
