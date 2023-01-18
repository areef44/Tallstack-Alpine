<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Movies extends Component
{
    public $searchKey;

    public function mount($urlKey = 'dora')
    {
        $this->searchKey = $urlKey;
    }

    public function render()
    {
        return view('livewire.movies');
    }
}
