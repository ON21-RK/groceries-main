<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AccountSettingsMessage extends Component
{
    public $message = "";

    public $visible = false;

    public function close() {
        $this->visible = false;
    }

    public function render()
    {
        return view('livewire.account-settings-message');
    }
}
