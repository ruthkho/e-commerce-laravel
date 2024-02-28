<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Flower;
use Illuminate\Support\Str;

class AdminAddFlowerComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:flowers'
        ]);
    }

    public function storeFlower(){
        $flower = new flower();
        $flower->name = $this->name;
        $flower->slug =  $this->slug;
        $flower->save();
        session()->flash('message','Flower has been created successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-flower-component')->layout('layouts.adminbase');
    }
}
