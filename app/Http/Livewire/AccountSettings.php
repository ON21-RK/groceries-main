<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccountSettings extends Component
{
    public User $user;

    public function mount() {
        $this->user = Auth::user();
    }

    protected $rules = [
        'user.name' => 'required|string|min:1',
        'user.email' => 'required|email',
    ];


    public function save(): void {
        $this->validate();

        $this->user->save();

        session()->flash('message', 'Account successfully updated.');
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.account-settings');
    }
}
