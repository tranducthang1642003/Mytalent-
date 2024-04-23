<?php

namespace App\Http\Controllers\job;
use App\Models\Cv;
use Illuminate\Support\Facades\Auth;
use App\Models\Keyword;
use Illuminate\Http\Request;
use App\Models\job;
class ListingController
{
    // Hiển thị danh sách CV và danh sách công việc
    public function Show_List()
    {
        $cvs = Cv::all();
        $jobs = Job::all();
        return view('lists', ['cvs' => $cvs, 'jobs' => $jobs]);
    }
}
class add_job
{
    public function Show_Add_Job(){
        return view('job.job');
    }

    //them danh sách 
    public function Job(Request $request){
        $job = job::create([
            'vitri' => $request->vitri,
            'congty' =>  $request->congty,
            'soluong' =>  $request->soluong,
            'lamviec' => $request->lamviec,
            'kinhnghiem' => $request->kinhnghiem,
            'diachi' => $request->diachi,
            'loaihopdong' => $request->loaihopdong,
            'kynang' => $request->kynang,
            'nganhnghe' => $request->nganhnghe,
            'luong' => $request->luong,
            'link' => $request->link,
        ]);
        $keywords = explode(',', $request->keywords); 
        foreach ($keywords as $keyword) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $job->keywords()->attach($keywordModel->id);
        }
        return view('job.job');
    }
    
    
    
//show job
public function Show_List(){
    $jobs = job::all();
    return view('job.list', ['jobs' => $jobs]);
}



public function filterJobsAndCvs(Request $request) 
{
    $Location = $request->input('Location');
    $Currentsalary = $request->input('Currentsalary');
    $Skills = $request->input('Skills');
    $keywords = $request->input('keyword');
    $jobQuery = Job::query();
    if ($Location) {
        $jobQuery->where('vitri', 'like', '%' . $Location . '%');
    }
    if ($Currentsalary) {
        $jobQuery->where('luong', 'like', '%' . $Currentsalary . '%');
    }
    if ($Skills) {
        $jobQuery->where('kynang', 'like', '%' . $Skills . '%');
    }
    if ($keywords) {
        $jobQuery->whereHas('keywords', function ($query) use ($keywords) {
            $query->whereIn('keyword', explode(',', $keywords));
        });
    }
   dd($request->all);
    // $jobs = $jobQuery->get();
    // $cvs = Cv::all();
    // $commonKeywordsList = [];
    // foreach ($cvs as $cv) {
    //     foreach ($jobs as $job) {
    //         $commonKeywordsList[$cv->id][$job->id] = $this->calculateKeywordMatch($cv, $job);
    //     }
    // }
    // return view('job.list1', ['jobs'=>$jobs, 'cvs' => $cvs,  'commonKeywordsList' => $commonKeywordsList, 'keywords' => $keywords,'job' => $job,  ]);
    return view('job.list1',);
}


// public function calculateKeywordMatch($cv, $job) {
//     $cv_Keywords = $cv->keywords()->pluck('keyword')->toArray();
//     $job_Keywords = $job->keywords()->pluck('keyword')->toArray();
//     $commonKeywords = array_intersect($cv_Keywords, $job_Keywords);
//     return $commonKeywords;
// }

 
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

    $job->vitri = $request->input('vitri');
    $job->congty = $request->input('congty');
    $job->soluong = $request->input('soluong');
    $job->lamviec = $request->input('lamviec');
    $job->kinhnghiem = $request->input('kinhnghiem');
    $job->diachi = $request->input('diachi');
    $job->loaihopdong = $request->input('loaihopdong');
    $job->kynang = $request->input('kynang');
    $job->nganhnghe = $request->input('nganhnghe');
    $job->luong = $request->input('luong');
    $job->link = $request->input('link');
    $job->trangthai = $request->input('trangthai');
    $job->save();
    return view('job.job', ['job' => $job]);
}

}