<?php

namespace App\Http\Controllers\job;

use Illuminate\Http\Request;
use App\Models\job;
class add_job
{
    public function showadd_job(){
        return view('job.job');
    }

    //them danh sách 
    public function job(Request $request){
        job::create([
            'vitri' => $request->vitri,
            'congty' =>  $request->congty,
            'soluong' =>  $request->soluong,
            'lamviec' => $request->lamviec,
            'diachi' => $request->diachi,
            'loaihopdong' => $request->loaihopdong,
            'kynang' => $request->kynang,
            'nganhnghe' => $request->nganhnghe,
            'luong' => $request->luong,
            'hinhthucluong' => $request->hinhthucluong,
            'tukhoa' => $request->tukhoa,
            'link' => $request->link,
        ]);

        return redirect()->route('job.job')->with('success', 'Job added successfully');
    }
    
//show danh sách

public function showlist(){
    $job = job::all();
    return view('job.list', ['job' => $job]);
}



}
