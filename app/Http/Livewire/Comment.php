<?php

namespace App\Http\Livewire;

use Livewire\Component;

/* Ekledim */
use App\Models\News;

class Comment extends Component
{
    public $record,$subject,$review,$news_id,$rate;

    public function mount($id){
        $this->record=News::findOrFail($id);
        $this->news_id=$this->record->id;
    }
    public function render()
    {
        return view('livewire.comment');
    }
    public function resetInput(){
        $this->subject=null;
        $this->review=null;
        $this->rate=null;
        $this->news_id=null;
        $this->IP=null;
    }

    public function store(){
        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
            'rate'=>'required',
        ]);
    }
}
