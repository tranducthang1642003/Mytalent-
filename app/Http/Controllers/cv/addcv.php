<?php

namespace App\Http\Controllers\cv;

use Illuminate\Http\Request;
use App\Models\cv;
class addcv
{
    public function showaddcv(){
        return view('CV.addcv');
    }


    public function cv_job(Request $request){
        $vitri = $request->input('vitri');
        $truonghoc = $request->input('truonghoc');
        // Serialize mảng $vitris thành chuỗi
        $vitri = serialize($vitri);
        $truonghoc = serialize($truonghoc);
        cv::create([
            'name' => $request->name,
            'gioitinh' => $request->gioitinh,
            'sdt' => $request->sdt,
            'email' => $request->email,
            'date' => $request->date,
            'diachi' => $request->diachi,
            'link' => $request->link,
            'daihoc' => $request->daihoc,
            'truonghoc' => $truonghoc, // Lưu trường 'truonghoc' dưới dạng JSON
            'vitri' => $vitri, // Lưu trường 'vitri' dưới dạng JSON
            'chungchi' => $request->chungchi,
            'nghanhnghe' => $request->nghanhnghe,
            'luong' => $request->luong,
            'mucluong' => $request->mucluong,
        ]);
    
        return redirect()->route('job.job')->with('success', 'Job added successfully');
    }
    
    

}

