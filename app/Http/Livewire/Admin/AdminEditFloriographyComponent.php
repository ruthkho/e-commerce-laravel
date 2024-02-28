<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Floriography;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditFloriographyComponent extends Component
{
    use WithFileUploads;

    public $floriography_slug;
    public $floriography_id;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $newimage;

    public function mount($floriography_slug){
        $this->floriography_slug = $floriography_slug;
        $floriography = Floriography::where('slug', $floriography_slug)->first();
        $this->floriography_id = $floriography->id;
        $this->name = $floriography->name;
        $this->slug = $floriography->slug;
        $this->description = $floriography->description;
        $this->image = $floriography->image;

    }

    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'newimage' => 'mimes:jpeg,png,jpg',
        ]);
    }

    public function updateFloriography(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'newimage' => 'mimes:jpeg,png,jpg',
        ]);

        $floriography = Floriography::find($this->floriography_id);
        $floriography->name = $this->name;
        $floriography->slug = $this->slug;
        $floriography->description = $this->description;

        if($this->newimage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('floriographies',$imageName);
            $floriography->image = $imageName;
        }

        $floriography->save();
        session()->flash('message','Product has been updated successfully.');
    }

    public function render()
    {

        return view('livewire.admin.admin-edit-floriography-component')->layout('layouts.adminbase');
    }
}
