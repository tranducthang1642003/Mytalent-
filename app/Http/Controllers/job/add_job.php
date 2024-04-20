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
        return redirect()->view('job.job')->with('success', 'Job added successfully');
    }
    
    
    
//show danh sách

public function showlist(){
    $jobs = job::all();
    return view('job.list', ['jobs' => $jobs]);
}

public function filterJobsAndCvs(Request $request) {
    $cvQuery = Cv::query();
$cvs = $cvQuery->get();
    $location = $request->input('location');
    $Currentsalary = $request->input('Currentsalary');
    $experience = $request->input('experience');
    $skills = $request->input('skills');
    $keywords = $request->input('keywords');
    $jobQuery = Job::query();
    if ($location) {
        $jobQuery->where('vitri', $location);
    }
    if ($Currentsalary) {
        $jobQuery->where('luong', '<=', $Currentsalary);
    }
    if ($experience) {
        $jobQuery->where('kinhnghiem', 'like', '%' . $experience . '%');
    }
    if ($skills) {
        $jobQuery->where('kynang', 'like', '%' . $skills . '%');
    }
    if ($keywords) {
        $jobQuery->whereHas('keywords', function ($query) use ($keywords) {
            $query->whereIn('keyword', explode(',', $keywords));
        });
    }
    $jobs = $jobQuery->get();
    $cvQuery = Cv::query();
    $cvs = $cvQuery->get();
    $matchPercentages = [];
    foreach ($cvs as $cv) {
        foreach ($jobs as $job) {
            $matchPercentages[$cv->id][$job->id] = $this->calculateKeywordMatch($cv, $job);
        }
    }
    return view('job.list1', ['jobs' => $jobs, 'cvs' => $cvs, 'matchPercentages' => $matchPercentages]);
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
    $matchPercentage = ($numCommonKeywords / $totalKeywords) * 100;
    return $matchPercentage;
}

 

public function destroyjob($id)
{
    // Find the danh muc by id
    $job = job:: findOrFail($id);

    // Delete the danh muc
    $job->delete();

    // Redirect back with a success message
    return redirect()->route('cv/listcv ')->with('success', 'Danh mục đã được xóa thành công.');
}



}



