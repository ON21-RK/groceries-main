<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowMobileMenu extends Component
{
    protected $listeners = ['increment'];

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.show-mobile-menu');
    }
}
