<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Flower;
use Illuminate\Support\Str;

class AdminEditFlowerComponent extends Component
{
    public $flower_slug;
    public $flower_id;
    public $name;
    public $slug;

    public function mount($flower_slug){
        $this->flower_slug = $flower_slug;
        $flower = Flower::where('slug', $flower_slug)->first();
        $this->flower_id = $flower->id;
        $this->name = $flower->name;
        $this->slug = $flower->slug;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:flowers'
        ]);
    }

    public function updateFlower(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:flowers'
        ]);

        $flower = Flower::find($this->flower_id);
        $flower->name = $this->name;
        $flower->slug = $this->slug;
        $flower->save();
        session()->flash('message', 'Flower has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-flower-component')->layout('layouts.adminbase');
    }
}
