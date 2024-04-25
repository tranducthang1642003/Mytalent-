<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\Cvs;
use App\Models\Jobs;
use App\Models\Keyword;
use Illuminate\Http\Request;

class JobController 
{
    // Show list of CVs and jobs
    public function showList()
    {
        $cvs = Cvs::all();
        $jobs = Jobs::all();
        return view('job.list', ['cvs' => $cvs, 'jobs' => $jobs]);
    }

    // Show add job form
    public function showAddJob()
    {
        return view('job.job');
    }

    // Add a new job
    public function addJob(Request $request)
    {
        $job = Job::create([
            'locations' => $request->locations,
            'company' => $request->company,
            'quantity' => $request->quantity,
            'work' => $request->work,
            'addresss' => $request->addresss,
            'contract' => $request->contract,
            'skill' => $request->skill,
            'experience' => $request->experience,
            'career' => $request->career,
            'wage' => $request->wage,
            'salary' => $request->salary,
            'link' => $request->link,
            'jobdescription' => $request->jobdescription,
        ]);

        $keywords = explode(',', $request->keyword);
        foreach ($keywords as $keyword) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $job->keywords()->attach($keywordModel->id);
        }

        return view('job.list', ['jobs' => Job::all()]);
    }

    // Delete a job
    public function destroyJob($id)
    {
        $job = Jobs::findOrFail($id);
        $job->delete();
        return redirect('js_job/list')->with('success', 'Job has been deleted successfully.');
    }

    // Show edit job form
    public function edit($id)
    {
        $job = Jobs::find($id);
        return view('job.editjob', compact('job'));
    }

    // Update job
    public function jobUpdate(Request $request, $id)
    {
        $job = Jobs::findOrFail($id);
        $job->locations = $request->input('locations');
        $job->company = $request->input('company');
        $job->quantity = $request->input('quantity');
        $job->work = $request->input('work');
        $job->addresss = $request->input('addresss');
        $job->contract = $request->input('contract');
        $job->skill = $request->input('skill');
        $job->experience = $request->input('experience');
        $job->career = $request->input('career');
        $job->wage = $request->input('wage');
        $job->salaryform = $request->input('salaryform');
        $job->link = $request->input('link');
        $job->trangthai = $request->input('trangthai');
        $job->save();
        return view('job.list', ['job' => $job]);
    }
}
