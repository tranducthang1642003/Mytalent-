<?php

namespace App\Http\Controllers\Cv;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\Cv; 
class addcv
{
    public function showAddCv()
    {
        return view('CV.addcv');
    }

    public function cvJob(Request $request)
    {
        // Get the input data
        $location = $request->input('location');
        $school = $request->input('school');
        $keyword = $request->input('keyword');
        $Link = $request->input('Link');
    
        // Serialize arrays before assigning them to the database columns
        $location = serialize($location);
        $school = serialize($school);
        $keyword = serialize($keyword);
        $Link = serialize($Link);
    
        // Create a new Cv instance
        Cv::create([
            
            'name' => $request->name,
            'gioitinh' => $request->gioitinh,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'Address' => $request->Address,
            'Education' => $request->Education,
            'school' => $school, 
            'Language' => $request->Language, 
            'Certificate' => $request->Certificate,
            'location' => $location,
            'career' => $request->career,
            'skills' => $request->skills,
            'Currentsalary' => $request->Currentsalary,
            'Desiredsalary' => $request->Desiredsalary,
            'Image' => $request->Image,
            'file' => $request->file,
            'keyword' => $keyword,
            'Link' => $Link,
            // Assuming 'job_id' should be set here if it's available in the request
            'job_id' => $request->job_id,
        ]);
    
        return redirect()->route('cv_job')->with('success', 'Job added successfully');
    }

    public function showcv(){
        $cv = Cv::all();
        $job = job::all();
        
        return view('CV.listcv', ['cv' => $cv, 'job' => $job]);
    }
    





    
}
