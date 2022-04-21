<?php

namespace App\Http\Livewire\Dictionary;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Alert extends ModalComponent
{

    public function render()
    {
        return view('livewire.dictionary.alert');
    }
}
