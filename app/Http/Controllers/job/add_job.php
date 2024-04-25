<?php

namespace App\Http\Controllers\job;
use App\Models\Cv;
use Illuminate\Support\Facades\Auth;
use App\Models\Keyword;
use Illuminate\Http\Request;
use App\Models\Jobs;
class add_job
{
    // Hiển thị danh sách CV và danh sách công việc
    public function Show_List()
    {
        $cvs = Cv::all();
        $jobs = Job::all();
        return view('lists', ['cvs' => $cvs, 'jobs' => $jobs]);
    }



    public function Show_Add_Job(){
        return view('job.job');
    }

    public function Job(Request $request)
    {
      
        $jobs = Jobs::all();
        $job = Jobs::create([
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
            'link'=>$request->link,
            'jobdescription'=>$request->jobdescription,
        ]);
    
        $keywords = explode(',', $request->keyword); 
        foreach ($keywords as $keyword) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $jobs->keywords()->attach($keywordModel->id);
        }
        return view('job.list', ['jobs' => $jobs]);
    }
//show job





public function destroyjob($id)
{
    $job = job:: findOrFail($id);
    $job->delete();
    return redirect ('js_job/list')->with('success', ' đã được xóa thành công.');
}

public function edit($id){
    $job=job::find($id);
    return view('job.editjob',compact('job'));
}
public function jobupdate(request $request,$id){
    $job =job::findOrFail($id);

    $job->Locations = $request->input('Locations');
    $job->Company = $request->input('Company');
    $job->quantity = $request->input('quantity');
    $job->Work = $request->input('Work');
    $job->Addresss = $request->input('Addresss');
    $job->Contract = $request->input('Contract');
    $job->Skill = $request->input('Skill');
    $job->Experience = $request->input('Experience');
    $job->Career = $request->input('Career');
    $job->Wage = $request->input('Wage');
    $job->salaryform = $request->input('salaryform');
    $job->Link = $request->input('Link');
    $job->trangthai = $request->input('trangthai');
    $job->save();
    return view('job.job', ['job' => $job]);
}

}
