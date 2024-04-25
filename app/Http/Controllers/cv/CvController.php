<?php

namespace App\Http\Controllers\Cv;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Cvs;
use App\Models\Keyword;

class CvController 
{
    public function showAddCv()
    {
        return view('CV.addcv');
    }

    public function addCv(Request $request)
    {
        $location = serialize($request->input('location'));
        $school = serialize($request->input('school'));

        $cv = Cvs::create([
            'name' => $request->name,
            'sex' => $request->sex,
            'phone' => $request->phone,
            'email' => $request->email,
            'date' => $request->date,
            'address' => $request->address,
            'education' => $request->education,
            'school' => $school,
            'language' => $request->language,
            'certificate' => $request->certificate,
            'location' => $location,
            'career' => $request->career,
            'skills' => $request->skills,
            'currentsalary' => $request->currentsalary,
            'desiredsalary' => $request->desiredsalary,
            'image' => $request->image,
            'feight' => $request->feight,
            'weight' => $request->weight,
            'maritalstatus' => $request->maritalstatus,
            'hometown' => $request->hometown,
            'checkock' => $request->input('checkock'),
        ]);

        $keywords = explode(',', $request->keywords);
        foreach ($keywords as $keyword) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
            $cv->keywords()->attach($keywordModel->id);
        }

        return redirect()->route('cv.list')->with('success', 'CV added successfully');

    }

    public function showCv()
    {
        $cvs = Cvs::all();
        $jobs = Jobs::all();

        return view('CV.listcv', compact('cvs', 'jobs'));
    }

    public function destroyCv($id)
    {
        $cv = Cvs::findOrFail($id);
        $cv->delete();

        return redirect('cv/listcv')->with('success', 'CV has been deleted successfully.');
    }

    public function edit($id)
    {
        $cv = Cvs::find($id);
        return view('CV.cvedit', compact('cv'));
    }

    public function update(Request $request, $id)
    {
        $cv = Cvs::findOrFail($id);
        $cv->name = $request->input('name');
        $cv->sex = $request->input('sex');
        $cv->phone = $request->input('phone');
        $cv->email = $request->input('email');
        $cv->date = $request->input('date');
        $cv->address = $request->input('address');
        $cv->education = $request->input('education');
        $cv->school = serialize($request->input('school'));
        $cv->language = $request->input('language');
        $cv->certificate = $request->input('certificate');
        $cv->location = serialize($request->input('location'));
        $cv->career = $request->input('career');
        $cv->skills = $request->input('skills');
        $cv->currentsalary = $request->input('currentsalary');
        $cv->desiredsalary = $request->input('desiredsalary');
        $cv->image = $request->input('image');
        $cv->feight = $request->input('feight');
        $cv->weight = $request->input('weight');
        $cv->maritalstatus = $request->input('maritalstatus');
        $cv->hometown = $request->input('hometown');
        $cv->checkock = $request->input('checkock');

        $cv->save();

        return redirect()->route('cv_job')->with('success', 'CV updated successfully.');
    }
}
