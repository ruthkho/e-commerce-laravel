<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Flower;
use Livewire\WithPagination;

class AdminFlowerComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteFlower($id){
        $flower = Flower::find($id);
        $flower->delete();
        session()->flash('message','Flower has been deleted successfully');
    }

    public function render()
    {
        // $flowers = Flower::paginate(5);

        $search = '%' . $this->searchTerm . '%';
        $flowers = Flower::where('id','LIKE',$search)
                            ->orwhere('name','LIKE',$search)
                            ->orwhere('slug','LIKE',$search)
                            ->orwhere('created_at','LIKE',$search)
                            ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-flower-component', ['flowers'=>$flowers])->layout('layouts.adminbase');
    }
}
