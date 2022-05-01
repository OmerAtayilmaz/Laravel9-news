<?php

namespace App\Http\Livewire;

use Livewire\Component;

/* Ekledim */
use App\Models\News;
use Auth;
class Comment extends Component
{
    public $record,$comment,$news_id,$rate;

    public function mount($id){
        $this->record=News::findOrFail($id);
        $this->news_id=$this->record->id;
    }
    public function render()
    {
        return view('livewire.comment');
    }
    public function resetInput(){
        $this->comment=null;
        $this->rate=null;
        $this->news_id=null;
        $this->ip=null;
    }

    public function store(){

        $this->validate([
            'comment'=>'required|min:10',
            'rate'=>'required',
        ]);
        \App\Models\Comment::create([
            'news_id'=>$this->news_id,
            'user_id'=>Auth::id(),
            'rate'=>$this->rate,
            'status'=>true,
            'ip'=>request()->ip(),
            'comment'=>$this->comment,
        ]);
        session()->flush('message','Commented out successfully!');
        $this->resetInput();
    }


}
