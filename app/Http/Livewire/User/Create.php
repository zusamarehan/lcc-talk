<?php

namespace App\Http\Livewire\User;

use App\Models\Registration;
use Livewire\Component;

class Create extends Component
{
    public $registration;

    public $rules = [
        'registration.email' => ['email', 'required'],
        'registration.name' => ['string', 'required', 'max:255'],
        'registration.city' => ['string', 'required', 'max:255'],
    ];

    public function mount()
    {
        $this->registration = new Registration();
    }

    public function submit()
    {
        $this->validate();

        $this->registration->save();
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
