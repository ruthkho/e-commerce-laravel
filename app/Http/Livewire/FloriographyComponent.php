<?php

namespace App\Http\Livewire;

use App\Models\Floriography;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;
use App\Models\Occasion;
use App\Models\Flower;

class FloriographyComponent extends Component
{
    public $sorting;
    public $pagesize;


    public function mount(){
        $this->sorting = "default";
        $this->pagesize = 12;
    }

    use WithPagination;
    public function render()
    {
        $floriographies = Floriography::all();
        $categories = Category::all();
        $occasions = Occasion::all();
        $flowers = Flower::all();

        return view('livewire.floriography-component', ['floriographies'=>$floriographies, 'categories'=>$categories, 'occasions'=>$occasions, 'flowers'=>$flowers])->layout("layouts.base");
    }
}



