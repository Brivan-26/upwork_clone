<div class="inline-block relative" x-data="{ open: true }">
    <input @click="open = true" @click.away="open=false;@this.resetIndex()" type="text" class="bg-gray-200 text-gray-700 border-2 focus:outline-none w-56 placeholder-gray-5000 px-2 py-1 rounded-full mr-3" placeholder="Search for a job"
    wire:model="query"
    wire:keydown.arrow-down.prevent="incrementIndex" 
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.enter="showJob"
    >

    @if(strlen($query) > 2)
        <div x-show="open" class="absolute rounded border bg-gray-100 text-md w-56 mt-1">
                @if(count($jobs) > 0)
                    @foreach($jobs as $index=>$job)
                        <p class="p-2 {{$index === $selectedIndex ? 'text-green-600' : ''}}">{{$job->title}}</p>
                    @endforeach
                @else 
                    <span class="text-red-600 p-2">0 results found for : {{$query}}</span>
                @endif
           
            
        </div>
    @endif
</div>