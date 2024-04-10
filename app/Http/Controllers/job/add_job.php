<?php

namespace App\Http\Controllers\job;

use Illuminate\Http\Request;

class add_job
{
    public function showadd_job(){
        return view('job.job');
    }

    public function add_job(Request $request){
        $job = new \App\Models\job;
        $job->vitri = $request->vitri;
        $iob-> congty=$request->congty;
        $job->soluong = $request->soluong;
        $job->lamviec = $request->lamviec;
        $job->diachi = $request->diachi;
        $job->loaihopdong = $request->loaihopdong;
  

    }

}
