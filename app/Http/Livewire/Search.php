<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
class Search extends Component
{
    public $query = '';
    public $jobs = [];
    public $selectedIndex= 0;

    public function incrementIndex()
    {
        if($this->selectedIndex == count($this->jobs)-1) {
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }

    public function decrementIndex()
    {
        if($this->selectedIndex == 0) {
            $this->selectedIndex = (count($this->jobs) -1);
            return;
        }
        $this->selectedIndex--;
    }

    public function resetIndex()
    {
        $this->selectedIndex = 0;
    }
    
    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';

        if(strlen($this->query) > 3) {
            $this->jobs = Job::where('title', 'like', $words)->orWhere('description','like', $words)->get();

        }
    }

    public function showJob()
    {
        if(count($this->jobs) > 0) {
            return redirect()->route('jobs.show', $this->jobs[$this->selectedIndex]);
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
