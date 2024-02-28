<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Occasion;
use App\Models\HomeSlider;
use App\Models\HomeOccasion;

class AdminHomeOccasionComponent extends Component
{
    public $selected_occasions = [];
    public $numberofproducts;

    public function mount(){
        $occasion = HomeOccasion::find(1);
        $this->selected_occasions = explode(',',$occasion->sel_occasions);
        $this->numberofproducts = $occasion->no_of_products;
    }

    public function updateHomeOccasion(){
        $occasion = HomeOccasion::find(1);
        $occasion->sel_occasions = implode(',',$this->selected_occasions);
        $occasion->no_of_products = $this->numberofproducts;
        $occasion->save();
        session()->flash('message','HomeOccasion has been updated successfully.');
    }

    public function render()
    {
        $occasions = Occasion::all();

        return view('livewire.admin.admin-home-occasion-component',['occasions'=>$occasions])->layout('layouts.adminbase');
    }
}
