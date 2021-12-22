<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $jobs = Job::where('status', 1)->latest()->get();

        return view('jobs.index', compact('jobs'));
    }

    public function show($id) {
        $job = Job::find($id);
        return view('jobs.show', compact('job'));
    }
}
