<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminEditUserComponent extends Component
{
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.admin.admin-edit-user-component')->layout('layouts.adminbase');
    }
}
