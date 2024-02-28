<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Floriography;
use Livewire\WithPagination;

class AdminFloriographyComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteFloriography($id){
        $floriography = Floriography::find($id);
        $floriography->delete();
        session()->flash('message','Floriography has been deleted successfully.');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $floriographies = Floriography::where('name','LIKE',$search)
                    ->orwhere('description','LIKE',$search)
                    ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-floriography-component',['floriographies'=>$floriographies])->layout('layouts.adminbase');
    }
}
