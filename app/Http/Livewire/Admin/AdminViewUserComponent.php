<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminViewUserComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        session()->flash('message','User has been deleted successfully.');
    }

    public function render()
    {
        // $users = User::paginate(10);

        $search = '%' . $this->searchTerm . '%';
        $users = User::where('name','LIKE',$search)
                            ->orwhere('id','LIKE',$search)
                            ->orwhere('email','LIKE',$search)
                            ->orwhere('utype','LIKE',$search)
                            ->orwhere('created_at','LIKE',$search)
                            ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-view-user-component',['users'=>$users])->layout('layouts.adminbase');
    }
}
