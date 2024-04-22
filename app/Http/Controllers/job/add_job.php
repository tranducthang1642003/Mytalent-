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
    public function showLists()
    {
        $cvs = Cv::all();
        $jobs = Job::all();
        
        return view('lists', ['cvs' => $cvs, 'jobs' => $jobs]);
    }
}

class add_job
{
    public function showadd_job(){
        return view('job.job');
    }

    //them danh sách 
    public function job(Request $request){
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
        $keywords = explode(',', $request->keyword); 
        foreach ($keywords as $keyword) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $job->keywords()->attach($keywordModel->id);
        }
        return view('job.job');
    }
    
    
    
//show job
public function showlist(){
    $jobs = job::all();
    return view('job.list', ['jobs' => $jobs]);
}



public function filterJobsAndCvs(Request $request) {
    $Location = $request->input('Location');
    $CurrentSalary = $request->input('Currentsalary');
    $Skills = $request->input('Skills');
    $keywords = $request->input('keyword');
    $jobQuery = Job::query();

    if ($Location) {
        $jobQuery->where('vitri', $Location);
    }
    if ($currentSalary) {
        $jobQuery->where('luong', '<=', $currentSalary);
    }
    if ($Skills) {
        $jobQuery->where('kynang', 'like', '%' . $Skills . '%');
    }
    if ($keywords) {
        $jobQuery->whereHas('keywords', function ($query) use ($keywords) {
            $query->whereIn('keyword', explode(',', $keywords));
        });
    }
    $jobs = $jobQuery->get();
    // Lấy danh sách CV
    $cvQuery = Cv::query();
    $cvs = $cvQuery->get();
    // Tính phần trăm khớp từ khóa và lọc công việc
    $matchPercentages = [];
    foreach ($cvs as $cv) {
        foreach ($jobs as $job) {
            $matchPercentages[$cv->id][$job->id] = $this->calculateKeywordMatch($cv, $job);
        }
    }
    return view('job.list1', ['jobs' => $jobs, 'cvs' => $cvs, 'matchPercentages' => $matchPercentages, 'keywords' => $keywords]);
}
public function calculateKeywordMatch($cv, $job) {
    // Lấy danh sách từ khóa từ cv và job
    $cvKeywords = $cv->keywords()->pluck('keyword')->toArray();
    $jobKeywords = $job->keywords()->pluck('keyword')->toArray();
    // Tính tổng số từ khóa
    $totalKeywords = count($cvKeywords) + count($jobKeywords);
    // Đếm số lượng từ xuất hiện trong cả cv và job
    $commonKeywords = array_intersect($cvKeywords, $jobKeywords);
    $numCommonKeywords = count($commonKeywords);
    // Tính và trả về tỷ lệ phần trăm của số từ xuất hiện chung so với tổng số từ khóa
    $matchPercentage = ($numCommonKeywords / $totalKeywords) *100;
    return $matchPercentage;
}

 

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



