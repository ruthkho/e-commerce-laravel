<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Flower;
use App\Models\HomeSlider;
use App\Models\HomeFlower;

class AdminHomeFlowerComponent extends Component
{
    public $selected_flowers = [];
    public $numberofproducts;

    public function mount(){
        $flower = HomeFlower::find(1);
        $this->selected_flowers = explode(',',$flower->sel_flowers);
        $this->numberofproducts = $flower->no_of_products;
    }

    public function updateHomeFlower(){
        $flower = HomeFlower::find(1);
        $flower->sel_flowers = implode(',',$this->selected_flowers);
        $flower->no_of_products = $this->numberofproducts;
        $flower->save();
        session()->flash('message','HomeFlower has been updated successfully.');
    }

    public function render()
    {
        $flowers = Flower::all();

        return view('livewire.admin.admin-home-flower-component',['flowers'=>$flowers])->layout('layouts.adminbase');
    }
}
