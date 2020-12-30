<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Swiper extends Component
{
    public $items = [1, 2, 3, 4, 5, 6, 7, 8];

    public function render()
    {
        return view('livewire.swiper');
    }

    public function onShuffle() {
        shuffle($this->items);
        $this->dispatchBrowserEvent('onContentChanged');
    }
}
