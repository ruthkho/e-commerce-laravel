<?php

namespace App\Http\Livewire;

use App\Models\Floriography;
use Livewire\Component;
use Cart;

class FloriographyDetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
        $floriography = Floriography::where('slug', $this->slug)->first();

        return view('livewire.floriography-details-component', ['floriography'=>$floriography])->layout('layouts.base');
    }
}
