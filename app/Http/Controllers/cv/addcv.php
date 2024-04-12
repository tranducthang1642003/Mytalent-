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
        // Assuming 'job' is your model for handling job applications
        cv::create([
            'name' => $request->name,
            'gioitinh' => $request->gioitinh,
            'sdt' => $request->sdt,
            'email' => $request->email,
            'date' => $request->date,
            'diachi' => $request->diachi,
            'file' => $request->file,
            'link' => $request->link,
            'daihoc' => $request->daihoc,
            'truonghoc' => $request->truonghoc,
            'hinhthucluong' => $request->hinhthucluong,
            'chungchi' => $request->chungchi,
            'nghanhnghe' => $request->nghanhnghe,
            'luong' => $request->luong,
            'mucluong' => $request->mucluong,
        ]);
    
        return redirect()->route('job.job')->with('success', 'Job added successfully');
    }
    

}

