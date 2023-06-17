<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Job;
use App\Models\JobType;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function allJobs(){
        return view('frontend.job.index');
    }

    public function Jobs(){
        $user = Auth::user()->id;
        $countries = Country::get();
        $myJobs = Job::where('user_id', $user)->with('user', 'jobType')->get();
        $allJobs = Job::with('user', 'jobType')->get()->all();
        $types = JobType::get();
        return view('frontend.job.index', compact('countries', 'user', 'types', 'myJobs', 'allJobs'));
    }

}