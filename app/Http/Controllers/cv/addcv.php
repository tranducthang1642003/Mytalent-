<?php

namespace App\Http\Controllers\Cv;
use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\Cvs; 
use App\Models\Keyword;
class addcv
{
    public function Show_Add_Cv()
    {
        return view('CV.addcv');
      
    }




    public function Cv_Job(Request $request){
        
        $location = $request->input('location');
        $school = $request->input('school');
        $checkock = $request->input('checkock');
        $location = serialize($location);
        $school = serialize($school);
       
        $input['checkock'] = $request->input('checkock');
        $Cvs = Cvs::create([
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
            'checkock' =>$checkock,
           
        ]);
    
        $keywords = explode(',', $request->keywords); 
        foreach ($keywords as $keywords) {
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keywords)]);
            $Cvs->keywords()->attach($keywordModel->id);
        }
        return redirect()->route('cv_job')->with('success', 'CV added successfully');
     
    }
    
    public function Show_Cv(){
        $cvs = Cvs::all();
        $jobs = Jobs::all();
        
        return view('CV.listcv', ['cvs' => $cvs, 'jobs' => $jobs]);
    }
    

    public function Destroy_Cv($id)
    {
        // Find the 
        $cv = Cv:: findOrFail($id);
    
        // Delete
        $cv->delete();

        return redirect ('cv/listcv')->with('success', 'Danh mục đã được xóa thành công.');
    }
 
    public function Edit($id)
    {
        $cv = Cv::find($id);
        return view('CV.cvedit', compact('cv'));
    }
    
    public function Cv_Update(Request $request, $id)
    {
        // Tìm CV theo ID
        $cv = Cv::findOrFail($id);
    
        // Cập nhật thông tin từ request
        $cv->name = $request->input('name');
        $cv->gioitinh = $request->input('gioitinh');
        $cv->phone = $request->input('phone');
        $cv->email = $request->input('email');
        $cv->date = $request->input('date');
        $cv->Address = $request->input('Address');
        $cv->Education = $request->input('Education');
        $cv->school = $request->input('school');
        $cv->Language = $request->input('Language');
        $cv->Certificate = $request->input('Certificate');
        $cv->location = $request->input('location');
        $cv->career = $request->input('career');
        $cv->Currentsalary = $request->input('Currentsalary');
        $cv->Desiredsalary = $request->input('Desiredsalary');
        $cv->Image = $request->input('Image');
        // Cập nhật thông tin khác tại đây
        
        // Lưu thay đổi vào cơ sở dữ liệu
        $cv->save();
        
        // Redirect về trang danh sách CV với thông báo thành công
        return redirect()->route('cv_job')->with('success', 'Cập nhật CV thành công.');
    }
    


    
}
