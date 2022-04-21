<?php

namespace App\Http\Livewire\Dictionary\Kutoen;

use App\Models\favorite;
use App\Models\kutoen as ModelsKutoen;
use Livewire\Component;

class Kutoen extends Component
{
    public $search;
    protected $queryString = ['search'];
    protected $listeners = ['loadMore'];
    public $limit = 20;
    public $time = 0;

    public function loadMore($addLimit)
    {
        $this->limit = $addLimit;
    }

    public function clearInput(){
        $this->search = null;
    }

    
    public function favorite($id){
        
        if (auth()->check()) {
            $favorite = favorite::where('kutoen_id',$id)->first();
        
            if($favorite){
                $favorite->delete();
            }else{
                $favorite = new favorite;
                $favorite->user_id = auth()->user()->id;
                $favorite->kutoen_id = $id;
                $favorite->save();
            }
        }else{
            // $this->emit('openModal', 'dictionary.alert');
        }

    }


    public function render()
    {
        $count = count(ModelsKutoen::where('word', 'like', $this->search.'%')->paginate($this->limit));
        return view('livewire.dictionary.kutoen.kutoen', [
            
            'entoku' => $count > 0 ? ModelsKutoen::where('word', 'like', $this->search.'%')->paginate($this->limit) : ModelsKutoen::paginate($this->limit),
            // 'entoku' => entoku::where('word', 'like', '%barometer%')->paginate($this->limit),
        ])->extends('layouts.app');
    }

}
