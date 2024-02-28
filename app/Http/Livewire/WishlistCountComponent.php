<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class WishlistCountComponent extends Component
{
    public $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        return view('livewire.wishlist-count-component');
    }
}
