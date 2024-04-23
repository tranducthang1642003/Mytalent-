<?php

namespace App\Http\Controllers\Cv;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\Cv; 
use App\Models\Keyword;
class addcv
{
    public function Show_Add_Cv()
    {
        return view('CV.addcv');
      
    }




    public function Cv_Job(Request $request){
        // Get the input data
        
        $Location = $request->input('Location');
        $School = $request->input('School');
        $checkock = $request->input('checkock');
    
        // Serialize arrays before assigning them to the database columns
        $Location = serialize($Location);
        $School = serialize($School);
       
        $input['checkock'] = $request->input('checkock');
        // Create a new Cv instance
        $cv = Cv::create([
            'Name' => $request->Name,
            'Gioitinh' => $request->Gioitinh,
            'Phone' => $request->Phone,
            'Email' => $request->Email,
            'Date' => $request->Date,
            'Address' => $request->Address,
            'Education' => $request->Education,
            'School' => $School, 
            'Language' => $request->Language, 
            'Certificate' => $request->Certificate,
            'Location' => $Location,
            'Career' => $request->Career,
            'Skills' => $request->Skills,
            'Currentsalary' => $request->Currentsalary,
            'Desiredsalary' => $request->Desiredsalary,
            'Image' => $request->Image,
            'Feight' => $request->Feight,
            'Weight' => $request->Weight,
            'Maritalstatus' => $request->Maritalstatus,
            'Hometown' => $request->Hometown,
            'checkock' =>$checkock,
           
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
    
    public function Show_Cv(){
        $cv = Cv::all();
        $job = job::all();
        
        return view('CV.listcv', ['cv' => $cv, 'job' => $job]);
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
