<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully');
    }

    public function render()
    {
        // $categories = Category::paginate(5);

        $search = '%' . $this->searchTerm . '%';
        $categories = Category::where('id','LIKE',$search)
                                ->orwhere('name','LIKE',$search)
                                ->orwhere('slug','LIKE',$search)
                                ->orwhere('created_at','LIKE',$search)
                                ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-category-component', ['categories'=>$categories])->layout('layouts.adminbase');
    }
}
