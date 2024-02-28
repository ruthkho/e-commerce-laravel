<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Setting;

class SidePromotionComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);

        return view('livewire.side-promotion-component',['setting' => $setting]);
    }
}
