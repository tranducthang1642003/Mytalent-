<?php

namespace App\Http\Controllers\Cv;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\Cv; 
use App\Models\Keyword;
class addcv
{
    public function showAddCv()
    {
        return view('CV.addcv');
    }

    public function cvJob(Request $request){
        // Get the input data
        $location = $request->input('location');
        $school = $request->input('school');
        $Link = $request->input('Link');
    
        // Serialize arrays before assigning them to the database columns
        $location = serialize($location);
        $school = serialize($school);
        $Link = serialize($Link);
    
        // Create a new Cv instance
        $cv = Cv::create([
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
            
            'Link' => $Link,
           
        ]);
    
        // Get the keywords from the request
        $keywords = explode(',', $request->keyword); // Assuming keywords are sent as a comma-separated string
    
        // Add keywords to the CV
        foreach ($keywords as $keyword) {
            // Create or find the keyword in the database
            $keywordModel = Keyword::firstOrCreate(['keyword' => trim($keyword)]);
    
            // Add the keyword to the CV
            $cv->keywords()->attach($keywordModel->id);
        }
    
        return redirect()->route('cv_job')->with('success', 'CV added successfully');
    }
    
    public function showcv(){
        $cv = Cv::all();
        $job = job::all();
        
        return view('CV.listcv', ['cv' => $cv, 'job' => $job]);
    }
    

    public function destroycv($id)
    {
        // Find the danh muc by id
        $cv = Cv:: findOrFail($id);
    
        // Delete the danh muc
        $cv->delete();
    
        // Redirect back with a success message
        return redirect()->route('cv_job ')->with('success', 'Danh mục đã được xóa thành công.');
    }
 
    public function edit($id)
    {
        $cv = Cv::find($id);
        return view('CV.cvedit', compact('cv'));
    }
    
    public function cvupdate(Request $request, $id)
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
