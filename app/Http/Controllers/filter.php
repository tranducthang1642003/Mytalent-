<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Models\Job;
use App\Models\CvKeyword;
use App\Models\Keyword;

class filter extends Controller
{
    public function showFilterForm()
    {
        $jobs = Job::all();
        return view('job.list1', compact('jobs'));
    }

  
    public function filterCv(Request $request)
    {
        $job_id = $request->input('job');
        $kinang = $request->input('kinang');
        $luong = $request->input('luong');
        $keyword = $request->input('keyword');
        $job = Job::find($job_id);
        if (!$job) {
            return redirect()->back()->with('error', 'Không tìm thấy công việc.');
        }
        $jobKeywords = $job->keywords->pluck('keyword');
        $cvKeywords = Keyword::whereHas('cv', function ($query) use ($kinang, $luong) {
            $query->where('Skills', 'like', '%' . $kinang . '%')
                  ->where('Currentsalary', '>=', $luong);
        })->pluck('keyword');
        // phần tử chung giữa hai mảng từ khóa
        $commonKeywordsCount = $cvKeywords->intersect($jobKeywords)->count();
        $totalKeywordsCount = $cvKeywords->count() + $jobKeywords->count();
        $averageMatchPercentage = $totalKeywordsCount ? ($commonKeywordsCount / $totalKeywordsCount) *100 : 0;
        $matchingCvs = Cv::where('Skills', 'like', '%' . $kinang . '%')
        ->where('Currentsalary', '>=', $luong)
        ->get();
        return view('job.list1', compact('averageMatchPercentage', 'jobKeywords', 'cvKeywords','matchingCvs'));
    }
    
    
 public function search(Request $request){

}

}
