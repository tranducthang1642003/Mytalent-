<?php

namespace App\Http\Controllers\job;
use App\Models\Cv;
use Illuminate\Support\Facades\Auth;

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
// Xử lý giá trị của hình thức lương trước khi lưu vào cơ sở dữ liệu
$hinhthucluong = $request->has('hinhthucluong') ? 1 : 0;

job::create([
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
    'hinhthucluong' => $hinhthucluong, // Sử dụng giá trị đã xử lý
    'tukhoa' => $request->tukhoa,
    'link' => $request->link,
]);

        return redirect()->route('job.job')->with('success', 'Job added successfully');
    }
    
//show danh sách

public function showlist(){
    $jobs = job::all();
    return view('job.list', ['jobs' => $jobs]);
}


    // Các phương thức khác

    public function filter(Request $request)
    {
        // Lấy thông tin từ Job
        $job = job::find($request->id);
     
       // Tạo truy vấn lọc CV
        $query = Cv::query();
        if ($job->kynang) {
            $query->where('skills', 'like', '%' . $job->kynang . '%');
        }
        if ($job->nganhnghe) {
            $query->where('career', $job->nganhnghe);
        }
        if ($job->luong) {
            $query->where('Currentsalary', '<=', $job->luong);
        }
        $cvs = $query->get();
        
        $match_scores = [];
        foreach ($cvs as $cv) {
            // Tính toán mức độ phù hợp của từng cột và lưu vào mảng
            $match_score = 0; // Thực hiện tính toán mức độ phù hợp ở đây
            $match_scores[$cv->id] = $match_score;
        }
        
        // Trả về kết quả
        return view('job.list1', ['cvs' => $cvs, 'match_scores' => $match_scores]);
    }
}



