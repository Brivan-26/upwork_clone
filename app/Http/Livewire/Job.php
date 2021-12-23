<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
class Job extends Component
{
    public $job;


    public function addLike()
    {
        if(auth::check()) {
            Auth::user()->likes()->toggle($this->job->id);
        }else {
            $this->emit('flash', 'Please login to add the job to your favors', 'error');
        }
    }

    public function render()
    {
        return view('livewire.job');
    }
}
