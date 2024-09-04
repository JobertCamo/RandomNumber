<?php

use Livewire\Volt\Component;

new class extends Component {

    public $modal;

    public $counter = 0;
    public $counter2 = 0;
    public $counter3 = 0;
    
    public function shuffle()
    {
        $this->counter = $this->getRandomNumber() + 1;
        $this->counter2 = $this->getRandomNumber() + 1;
        $this->counter3 = $this->getRandomNumber() + 1;

        if($this->counter == $this->counter2) {
            if($this->counter2 == $this->counter3) {
                    $this->modal = true;
            }
        }
    }

    private function getRandomNumber() {
        return rand(1, 3);
    }
    

}; ?>

<div class="text-black text-6xl fixed inset-0 z-10 flex flex-col items-center justify-center font-mono" x-data="{ open: false }">
    <div class="bg-yellow-400 p-2 px-5 rounded-xl text-red-500">
        <h1>{{ $counter . $counter2 . $counter3 }}</h1>
    </div>
    <button wire:click="shuffle()" class="p-2 px-5 rounded-xl mt-6 text-3xl font-bold text-white bg-blue-500 hover:bg-blue-400">GO!!!</button>

        <div x-show="$wire.modal" class="fixed inset-0 z-10 flex items-center justify-center">
            <div x-show="$wire.modal" class="text-center pt-10 p-5 text-black text-5xl bg-white relative">
                <div class="font-bold">
                    You Won
                </div>
                <button wire:click="$set('modal', false)" class="text-xl bg-blue-500 px-2">Retry</button>
            </div>
        </div>    
    

</div>