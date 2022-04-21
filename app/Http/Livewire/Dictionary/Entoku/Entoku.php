<?php

namespace App\Http\Livewire\Dictionary\Entoku;

use App\Models\entoku as ModelsEntoku;
use App\Models\favorite;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Entoku extends Component
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

    // public function u(){
        


    //     for ($i=0; $i < count(entoku::where('word', 'like', '0-TRIAL-%')->take(51)->get()->toArray()); $i++) { 
            
    //         // dump(entoku::where('word', 'like', '0-TRIAL-%')->get()->toArray()[$i]['word'].' '.$i);
    //         entoku::where('ID', '=', entoku::where('word', 'like', '0-TRIAL-%')->get()->toArray()[$i]['ID'])
    //         ->update(
    //             [
    //                 'word' => entoku::where('word', 'like', '0-TRIAL-%')->get()->toArray()[$i]['word'].' '.$i
    //             ]
    //         );
    //     }
    // }

    public function favorite($id){
        dd(auth()->check());
        $favorite = favorite::where('entoku_id',$id)->first();
        
        if($favorite){
            $favorite->delete();
        }else{
            $favorite = new favorite;
            $favorite->user_id = auth()->user()->id;
            $favorite->entoku_id = $id;
            $favorite->save();
        }
        
    }


    public function render()
    {
       
        $count = count(ModelsEntoku::where('word', 'like', $this->search.'%')->paginate($this->limit));
        return view('livewire.dictionary.entoku.entoku', [

            // 'entoku' => $count > 0 ? ModelsEntoku::where('word', 'like', '%'.$this->search.'%')->paginate($this->limit) : ModelsEntoku::paginate($this->limit),
            'entoku' => $count > 0 ? ModelsEntoku::with('favorites')->where(DB::raw('lower(word)'), 'like', strtolower($this->search).'%')->orderBy('word','asc')->paginate($this->limit) : ModelsEntoku::paginate($this->limit),
            // 'entoku' => entoku::where('word', 'like', '%barometer%')->paginate($this->limit),
        ])->extends('layouts.app');
    }

}
