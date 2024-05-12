<?php

namespace App\Livewire;

use Livewire\Component;

class MyUniquePopupComponent extends Component
{
    public $showPopup = false;
    public function togglePopup()
    {
        $this->showPopup = !$this->showPopup;
    }
    public function render()
    {
        return view('livewire.my-unique-popup-component');
    }
}
