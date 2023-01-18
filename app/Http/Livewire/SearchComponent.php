<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $searchKey;

    public $searchAction = true;


    public function searchTrigger()
    {
        /**
         * Search Action
         */
        if ($this->searchAction) $this->emit('search-trigger', $this->searchKey);

        /**
         * Redirect Action
         */
        else redirect('/movies/' . $this->searchKey);



        // dd($this->searchAction);
    }

    public function mount($paramsKey = '', $paramsAction = true)
    {
        $this->searchKey = $paramsKey;
        $this->searchAction = $paramsAction;
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
