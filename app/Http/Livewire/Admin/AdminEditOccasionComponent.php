<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Occasion;
use Illuminate\Support\Str;

class AdminEditOccasionComponent extends Component
{
    public $occasion_slug;
    public $occasion_id;
    public $name;
    public $slug;

    public function mount($occasion_slug){
        $this->occasion_slug = $occasion_slug;
        $occasion = Occasion::where('slug', $occasion_slug)->first();
        $this->occasion_id = $occasion->id;
        $this->name = $occasion->name;
        $this->slug = $occasion->slug;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:occasions'
        ]);
    }

    public function updateOccasion(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:occasions'
        ]);

        $occasion = Occasion::find($this->occasion_id);
        $occasion->name = $this->name;
        $occasion->slug = $this->slug;
        $occasion->save();
        session()->flash('message', 'Occasion has been updated successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-occasion-component')->layout('layouts.adminbase');
    }
}
