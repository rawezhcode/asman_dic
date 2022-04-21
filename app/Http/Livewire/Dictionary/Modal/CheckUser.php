<?php

namespace App\Http\Livewire\Dictionary\Modal;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CheckUser extends ModalComponent
{
    public function render()
    {
        return view('livewire.dictionary.modal.check-user');
    }
}
