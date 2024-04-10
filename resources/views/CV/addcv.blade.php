<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css" integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
  
    <script src="https://unpkg.com/vanilla-tags-input"></script>
</head>
<body>
    <header>
<div class="menu">
    <div class="left">
   <div class="tab">
   <button class="tablinks" style=" border: none; background-color: #0000f7; font-weight: 900; font-size: 30px; color: white;">Mytalent</button>
   <button class="tablinks" onclick="openCity(event, 'Đăng nhập')">Danh Sách Ứng viên</button>
   <button class="tablinks" onclick="openCity(event, 'Đăng ký')" id="defaultOpen">Danh Sách vị Trí</button>
</div>
<div id="Đăng nhập" class="tabcontent"></div>
<div id="Đăng ký" class="tabcontent"></div>
</div>

<div class="right">
<div class="step"><h3>30 Credist </h3></div>
<div class="step"><h3>VN</h3></div>
<div class="step"><h3>Nhật nguyễn </h3></div>
</div>
</div>
</header>
<br>
<article>
<section>
<div class="col-1">
<div class="text-1"> Danh sách CV / Thêm thông tin</div>
<div class="text-1">Thông tin CV</div>
<div class="left">
   <div class="tab1">
   <button class="tablinks" onclick="openCity(event, 'Đăng nhập')">Danh Sách Ứng viên</button>
   <button class="tablinks" onclick="openCity(event, 'Đăng ký')" id="defaultOpen">Danh Sách vị Trí</button>
</div>
<div id="Đăng nhập" class="tabcontent"></div>
<div id="Đăng ký" class="tabcontent"></div>
</div>
</div>



<div id="TTCB" class="tabcontent"></div>
<div id="TTBS" class="tabcontent"></div>

<div class="main-left">
<div class="from-register">
<div class="text-from"><h3>Thông tin ứng viên</h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
    <label>Tên ứng viên <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Giới tính <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
      <input type="radio" name="gioitinh" id="0">
      <label for="0">Nam</label>
      <input type="radio" name="gioitinh" id="1">
      <label for="1">Nữ</label>
      <input type="radio" name="gioitinh" id="2">
      <label for="2">Khác</label>
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Số điện thoại <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Email <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="email" class="txt" placeholder="Nhập">
    </div>
    </div>
 <!-- f -->
 <p><div class="from"></p>
    <label>ngày sinh <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="date" class="txt" placeholder="Nhập">
    </div>
    </div>

 <!-- f -->
 <p><div class="from"></p>
    <label>Địa chỉ hiện tại </label>
    <div class="from-txt">
    <input type="date" class="txt" placeholder="Nhập">
    </div>
    </div>
  </div>
</div>
</div>
<!-- trinh do hojc -->

<section>
<div class="from-register">
<div class="text-from"><h3>Trình độ học vấn </h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
  <label>Trình độ học vấn </label>
    <div class="from-txt">
      <input type="radio" name="daihoc" id="0">
      <label for="0">đại học</label>
      <input type="radio" name="daihoc" id="1">
      <label for="1">cao đẳng</label>
      <input type="radio" name="daihoc" id="2">
      <label for="2">trung cấp</label>
      <input type="radio" name="daihoc" id="3">
      <label for="3">khác</label>
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Trường học </label>
    <div class="from-txt">
    <input type="list" class="txt" list="items" placeholder="Nhập">
    <datalist id="items">
      <option value="Trường công nghệ thông">
      <option value="Trường đại học mở">
      <option value="Sư phạm kĩ thuật">
      <option value="Cao thắng">
      <option value="Đại học FPT">
      <option value="Cao đẳng điện lực">
      <option value="Cao đẳng việt mỹ">
</datalist>
    </div>
    <select name="countries" id="countries" >
    <option value="1">Sư phạm </option>
    <option value="2">Cao đẳng fpt</option>
    <option value="3">Đại học sài gòn</option>
    <option value="4">Cao đẳng kĩ thuật</option>
    <option value="5">đại học maketing</option>
</select>

    </div>
    <!-- f -->


    <p><div class="from"></p>
    <label>Ngoại Ngữ </label>
    <div class="from-txt">
    <input type="text" class="txt" id="tag-input1">
    </div>
</div>

        <p><div class="from"></p>
    <label>Chứng chỉ khác</label>
    <div class="from-txt">
    <input type="text" class="txt" placeholder="Nhập">
    </div>
</div>
</section>

<section>
<div class="from-register">
<div class="text-from"><h3>Kinh nghiệm làm việc<h3></div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Vị trí <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
      <input type="radio" name="gioitinh" id="0">
      <label for="0">Nam</label>
      <input type="radio" name="gioitinh" id="1">
      <label for="1">Nữ</label>
      <input type="radio" name="gioitinh" id="2">
      <label for="2">Khác</label>
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Nghành nghề <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>kĩ năng *</label>
    <div class="from-txt">
    <input type="email" class="txt" placeholder="Nhập">
    </div>
    </div>
 <!-- f -->
 <p><div class="from"></p>
    <label>Mức lương hiện tại  *</label>
    <div class="from-txt">
    <input type="number" class="txt" placeholder="Nhập">
    </div>
    </div>

 <!-- f -->
 <p><div class="from"></p>
    <label>mức lương mong muốn *</label>
    <div class="from-txt">
    <input type="date" class="txt" placeholder="Nhập">
    </div>
    </div>
  </div>
</div>
</div>
</section>



</div>
<div class="main-right">
<section>
<p><div class="from"></p>
<label for="file" style="width: 30%;">
<div class="text-file"><h1>Ảnh đại diện</h1></div>
<div class="txt-img">
    <div class="icons"><i class="fa-solid fa-upload fa-bounce" style="color: #000000;"></i></div>
     <div class=""><span class="txt-tetx">Tải ảnh lên</span></div>
    <input type="file" name="file" id="file">
    </label>
    </div>
    <div class="txt-text1">Chưa chọn 
  <p>chấn nhận định dạng :pdf, docx, doc,odt,pptx,txt,jpeg,png</p>
    </div>
    </div>
    </section> 

    <section>
<p><div class="from"></p>
<label for="file" style="width: 30%;">
<div class="text-file"><h1>File đính kèm</h1></div>
<div class="txt-link">
    <div class="icons"></div>
     <div class=""><span class="txt-tetx">+</span></div>
    <input type="file" name="file" id="file">
    </label>
    </div>
    </div>
    </section>
    <p><div class="from"></p>
    <label class="text-file">Từ khóa *</label>
    <div class="from-txt">
    <input type="text" class="txt1" placeholder="Nhập">
    </div>
    </div>

</div>


<div class="main-right">
<section>
<p><div class="from"></p>
<label for="file" style="width: 30%;">
<div class="text-file"><h1>Liên kết</h1></div>
    <input type="text" class="txt1" placeholder="Nhập">
    <input type="text" class="txt1" placeholder="Nhập">
    <input type="text" class="txt1" placeholder="Nhập">
    </div>
  
    
</section>


</article>

</body>
</html>
<script src="/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>   

