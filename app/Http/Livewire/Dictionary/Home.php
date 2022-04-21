<?php

namespace App\Http\Livewire\Dictionary;

use App\Models\entoku;
use App\Models\favorite;
use Illuminate\Support\Facades\Response;
use Livewire\Component;
use Illuminate\Support\Str;

class Home extends Component
{
    
    public function render()
    {

        return view('livewire.dictionary.home')->extends('layouts.app');
    }
}
