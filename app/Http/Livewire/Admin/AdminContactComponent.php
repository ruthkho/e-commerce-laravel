<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class AdminContactComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function deleteMessage($contact_id){
        $contact = Contact::find($contact_id);
        $contact->delete();
        session()->flash('contact','Message has been deleted successfuly.');
    }

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $contacts = Contact::where('name','LIKE',$search)
                            ->orwhere('id','LIKE',$search)
                            ->orwhere('email','LIKE',$search)
                            ->orwhere('phone','LIKE',$search)
                            ->orwhere('comment','LIKE',$search)
                            ->orwhere('created_at','LIKE',$search)
                            ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts])->layout('layouts.adminbase');
    }
}
