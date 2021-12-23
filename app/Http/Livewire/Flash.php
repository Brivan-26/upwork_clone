<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    protected $listeners = ['flash' => 'setFlashMessage'];
    public $message;
    public $type;
    public $flashStyling = [
        'error' => 'border-red-200 text-red-700 bg-red-200',
        'success' => 'border-green-200 text-green-700 bg-green-200',
        'warning' => 'border-orange-200 text-orange-700 bg-orange-200',
        'info' => 'border-blue-200 text-blue-700 bg-blue-200'
    ];

    public function setFlashMessage($message, $type)
    {
        $this->message = $message;
        $this->type = $type;


        $this->dispatchBrowserEvent('flash-sent');
    }

    public function render()
    {
        return view('livewire.flash');
    }
}
