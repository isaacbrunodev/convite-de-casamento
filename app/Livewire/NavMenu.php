<?php

namespace App\Livewire;

use Livewire\Component;

class NavMenu extends Component
{
    public $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function closeMenu()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.nav-menu');
    }
}
