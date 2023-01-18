<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $searchKey;
    public $searchAction = false;

    public function searchTrigger()
    {
        // $this->emit('search-trigger', $this->searchKey);
        return redirect('/movies?search'=)
    }

    public function render()
    {
        return view('livewire.home');
    }
}
