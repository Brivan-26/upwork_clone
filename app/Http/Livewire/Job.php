<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
class Job extends Component
{
    public $job;

    public function addLike()
    {
        Auth::user()->likes()->toggle($this->job->id);
    }

    public function render()
    {
        return view('livewire.job');
    }
}
