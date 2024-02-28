<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;

class AdminFooterComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);

        return view('livewire.admin-footer-component',['setting' => $setting]);
    }
}

