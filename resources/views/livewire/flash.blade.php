<div x-data="{ open: false }" @flash-sent.window="open=true; setTimeout(()=> {open=false}, 5000)">
    <div x-show="open" x-cloak class="border {{ $type ? $flashStyling[$type] :'' }} px-1 py-2 rounded">
        {{$message}} 
        
    </div>

</div>
