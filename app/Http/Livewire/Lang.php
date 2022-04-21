<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lang extends Component
{
    public function render()
    {
        if (session()->get('lang') == null) {
            session()->put('lang', 'En');
        }
        return view('livewire.lang');
    }

    public function changeLang($lang)
    {
        session()->put('lang', $lang);
        return redirect()->route('dic.home');
    }
}
