<?php

namespace App\Http\Livewire\Dictionary;

use App\Models\menu;
use Livewire\Component;

class Sort extends Component
{

    public $sortBy = 'word';

    public $sortDirection = 'asc';

    public function updateTaskOrder($sortBy)
    {
        dd($sortBy);
    }

    public function render()
    {
        return view('livewire.dictionary.sort',[
            'menu' => menu::whereNull('parent')->get(),
            'submenu' => menu::get(),
        ])->extends('layouts.app');
    }
}
