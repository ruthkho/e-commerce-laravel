<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class AdminViewUserDetailsComponent extends Component
{
    public $user_id;

    public function mount($user_id){
        $this->user_id = $user_id;
    }

    public function render()
    {
        $user = User::find($this->user_id);

        return view('livewire.admin.admin-view-user-details-component', ['user' => $user])->layout('layouts.adminbase');
    }
}
