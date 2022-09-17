<?php

namespace App\Http\Livewire\User;

use App\Models\Registration;
use Livewire\Component;

class Lists extends Component
{
    public $registrations;
    public $search = '';

    public function render()
    {
        $this->registrations = Registration::query()
            ->when($this->search, function($query) {
                $query->where('email', 'like', "%".$this->search."%");
            })
            ->get();

        return view('livewire.user.lists');
    }
}
