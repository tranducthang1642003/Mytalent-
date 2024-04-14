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
@php
use Illuminate\Support\Facades\Auth;
@endphp

@auth
    
<span class="text-white">
    <small class="text-white mx-2">
        Xin chào, {{ Auth::user()->email }}
    </small>
</span>

     

    @csrf
</form>
    @else
        <a href="/login" class="text-white"><small class="text-white mx-2">Đăng nhập</small></a> /
        <a href="/register" class="text-white"><small class="text-white mx-2">Đăng ký</small></a>
    @endauth
</div>
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
<form method="POST" action="{{ route('job') }}" enctype="multipart/form-data">
                          @csrf
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
<div class="text-from"><h3>Thông tin cơ bản</h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
    <label>Vị trí tuyển dụng <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" name="vitri" class="txt" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Tên công ty<span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" name="congty" class="txt" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Số lượng tuyển dụng  <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" name="soluong" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Hình thức việc làm<span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" class="txt" name="lamviec" placeholder="Nhập">
    </div>
    </div>
 <!-- f -->
 <p><div class="from"></p>
    <label>Địa chỉ <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
    <input type="text" name="diachi" class="txt" placeholder="Nhập">
    </div>
    </div>

 <!-- f -->
 <p><div class="from"></p>
    <label>Loại hợp đồng</label>
    <div class="from-txt">
    <input type="text" name="loaihopdong" class="txt"  placeholder="Nhập">
    </div>
    </div>

    <p><div class="from"></p>
    <label>Mô tả công việc</label>
    <div class="from-txt">
    <input type="text" name="mota" class="txt" placeholder="Nhập">
    </div>
    </div>
    <br>
  </div>
</div>
</div>
</div>

<div class="main-right">
    <p><div class="from"></p>
    <label class="text-file">Từ khóa *</label>
    <div class="from-txt">
    <input type="text" name="tukhoa" class="txt1" placeholder="Nhập">
    </div>
    </div>
    <p><div class="from"></p>
    <label class="text-file">link *</label>
    <div class="from-txt">
    <input type="text" name="link" class="txt1" placeholder="Nhập">
    </div>
    </div>
</div>


<!-- trinh do hojc -->
<div class="main-left">
<section>
<div class="from-register">
<div class="text-from"><h3>Thông tin vị trí</h3></div>
<div class="form-txt">
<div class="from-col-password">
  <p><div class="from"></p>
  <label>Kinh nghiệm yêu cầu </label>
    <div class="from-txt">
    <input type="text" name="kinhnghiem" class="txt" placeholder="Nhập">
    </div>
    </div>
    <!-- f -->
    <p><div class="from"></p>
    <label>Kỹ Năng </label>
    <div class="from-txt">
    <input type="list" class="txt" name="kynang"  list="tag-input1" placeholder="Nhập" >
    <datalist id="tag-input1" >
      <option value="Backend">
      <option value="Fonfend">
      <option value="Teamword">
      <option value="leadership">
      <option value="problemsolvings">
      <option value="interpersonal">
</datalist>
    </div>
    </div>
    <!-- f -->


    <p><div class="from"></p>
    <label>Nghành nghề</label>
    <div class="from-txt">
    <input type="text" name="nganhnghe" class="txt" >
    </div>
</div>

        <p><div class="from"></p>
    <label>Mức lương</label>
    <div class="from-txt">
    <input type="text" name="luong" class="txt" placeholder="Nhập">
    </div>
</div>

<p><div class="from"></p>
    <label>Hình thức lương <span class ="text-red-light-1">*</span></label>
    <div class="from-txt">
      <input type="radio" name="hinhthucluong" id="0">
      <label for="0">NET</label>
      <input type="radio" name="hinhthucluong" id="1">
      <label for="1">GROSS</label>
    </div>
    <br>
    </div>
  
</div>
</div>
</div>
</div>
</section>



</article>
<br>

<footer>
<button type="submit" class="btn">Lưu và thêm mới </button>
<input type="reset" class="btn1"  value="Xóa ">
              </div>
            </form>
            </div>
</footer>

</body>
</html>
<script src="/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>   


