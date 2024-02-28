<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Occasion;
use Illuminate\Support\Str;

class AdminAddOccasionComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:occasions'
        ]);
    }

    public function storeOccasion(){
        $occasion = new Occasion();
        $occasion->name = $this->name;
        $occasion->slug =  $this->slug;
        $occasion->save();
        session()->flash('message','Occasion has been created successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-occasion-component')->layout('layouts.adminbase');
    }
}
