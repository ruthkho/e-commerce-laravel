<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Occasion;
use Livewire\WithPagination;

class AdminOccasionComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteOccasion($id){
        $occasion = Occasion::find($id);
        $occasion->delete();
        session()->flash('message','Occasion has been deleted successfully');
    }

    public function render()
    {
        // $occasions = Occasion::paginate(5);

        $search = '%' . $this->searchTerm . '%';
        $occasions = Occasion::where('id','LIKE',$search)
                            ->orwhere('name','LIKE',$search)
                            ->orwhere('slug','LIKE',$search)
                            ->orwhere('created_at','LIKE',$search)
                            ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-occasion-component', ['occasions'=>$occasions])->layout('layouts.adminbase');
    }
}
