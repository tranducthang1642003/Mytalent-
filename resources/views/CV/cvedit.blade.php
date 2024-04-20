<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CV</title>
</head>
<body>
    
<form action="{{ route('cvupdate', $cv->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ $cv->name }}"><br>
    
    <label for="gioitinh">Gender:</label><br>
    <input type="text" id="gioitinh" name="gioitinh" value="{{ $cv->gioitinh }}"><br>
    
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" value="{{ $cv->phone }}"><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ $cv->email }}"><br>
    
    <label for="date">Date:</label><br>
    <input type="text" id="date" name="date" value="{{ $cv->date }}"><br>
    
    <label for="Address">Address:</label><br>
    <input type="text" id="Address" name="Address" value="{{ $cv->Address }}"><br>
    
    <label for="Education">Education:</label><br>
    <input type="text" id="Education" name="Education" value="{{ $cv->Education }}"><br>
    
    <label for="school">School:</label><br>
    <input type="text" id="school" name="school" value="{{ $cv->school }}"><br>
    
    <label for="Language">Language:</label><br>
    <input type="text" id="Language" name="Language" value="{{ $cv->Language }}"><br>
    
    <label for="Certificate">Certificate:</label><br>
    <input type="text" id="Certificate" name="Certificate" value="{{ $cv->Certificate }}"><br>
    
    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" value="{{ $cv->location }}"><br>
    
    <label for="career">Career:</label><br>
    <input type="text" id="career" name="career" value="{{ $cv->career }}"><br>
    
    <label for="Currentsalary">Current Salary:</label><br>
    <input type="text" id="Currentsalary" name="Currentsalary" value="{{ $cv->Currentsalary }}"><br>
    
    <label for="Desiredsalary">Desired Salary:</label><br>
    <input type="text" id="Desiredsalary" name="Desiredsalary" value="{{ $cv->Desiredsalary }}"><br>
    
    <label for="Image">Image:</label><br>
    <input type="text" id="Image" name="Image" value="{{ $cv->Image }}"><br>
    
    <!-- Add other fields here -->
    
    <button type="submit">Update CV</button>
</form>

</body>
</html>
