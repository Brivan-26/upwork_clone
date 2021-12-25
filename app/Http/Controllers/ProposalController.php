<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\CoverLetter;
use App\Models\Job;
use Auth;
class ProposalController extends Controller
{
    
    public function store(Request $request, $id)
    {
        $job = Job::where('id',$id)->first();
        if($job) {

            $proposal = Proposal::create([
                'job_id' => $job->id,
                'user_id' => Auth::user()->id,
                'is_verified' => 0
            ]);

            CoverLetter::create([
                'proposal_id' => $proposal->id,
                'content' => $request->content
            ]);
        }

        return redirect()->route('jobs.index');
    }
}
