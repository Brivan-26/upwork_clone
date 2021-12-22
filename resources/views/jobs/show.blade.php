@extends('layouts.app')

@section('content')

    <h1 class="text-3xl text-green-500 mb-3">{{$job->title}}</h1>

        <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-gray-300">
            <h2 class="text-xl font-bold text-green-800">{{$job->title}}</h2>
            <p class="text-md-text-gray-800">{{$job->description}}</p>
            <div class="flex items-center">
                <span class="h-2 w-2 bg-green-300 rounded-full mr-1"></span>
                <a href="#">Apply for this job</a>
            </div>
            <span class="text-sm text-gray-600">{{number_format($job->price/100,2,',',' ')}} $</span>
        </div>

@endsection