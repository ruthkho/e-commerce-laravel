<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Floriography;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddFloriographyComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;

    public function generateSlug(){
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:floriographies',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
    }

    public function addFloriography(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:floriographies',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);

        $floriography = new Floriography();
        $floriography->name = $this->name;
        $floriography->slug = $this->slug;
        $floriography->description = $this->description;

        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('floriographies',$imageName);
        $floriography->image = $imageName;

        $floriography->save();
        session()->flash('message','Floriography has been created successfully.');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-floriography-component')->layout('layouts.adminbase');

    }
}
