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
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
     <script src="https://unpkg.com/@yaireo/tagify"></script>
</head>
<body>
<header>
<div class="menu">
    <div class="left">
   <div class="tab">
    <button class="tablinks" style=" border: none;  font-weight: 900; font-size: 30px; color: white;">Mytalent<span class="logo">Global</span></button>
   <button type="button"class="tablinks"> <a href="/cv/listcv">  Danh Sách ứng viên</button></a>
   <button class="tablinks" > <a href="/js_job/list">Danh Sách vị trí </button></a>
</div>
<div id="Đăng" class="">

</div>
<div id="Đăng" class=""></div>
</div>

<div class="right">
    <input type="submit" value="30 Credist" class="btn3" style="width: 30%; font-size: 17px; color: black;">
    <input type="submit" value="VN" class="btn2" style="width: 15%;
    height: 40px;
    color: white;
    font-weight: 900;
    background: content-box;">
<div class="step"><h3>@php
use Illuminate\Support\Facades\Auth;
@endphp
@auth
<span class="text-white">
    <small class="text-white mx-2">
       {{ Auth::user()->email }}
    </small>
</span>
    @csrf
    @else
    
    @endauth
</h3></div>
</div>
</header>
<br>

    <div class="sigin-col-1" style="width: 100%">  

<div class="da"></div>
<div class="col-1">
    <div class="text-2"> <span>Danh sách CV </span> / Thêm CV</div>
    <div class="text-1"><i class="fa-solid fa-arrow-left"></i>  Thông tin CV</div>
    <div class="left">
       <div class="tab1">

            <button class="tablinks" onclick="openCity(event, 'Đăng nhập')"id="defaultOpen">Thông tin cơ bản</button>
            <button class="tablinks" onclick="openCity(event, 'Đăng ký')" >Thông tin bổ xung</button>
            </div>
    </div>
    </div>
    </div>
    <form method="POST" action="{{ route('cv_job') }}">
        @csrf
<section>
<div id="Đăng nhập" class="tabcontent">
    @include('layouts.cv')
</div>
</section>

<section>
<div id="Đăng ký" class="tabcontent">
    @include('layouts.bosung')
</div>
</section>

<br>
<section>
<footer>
    <input type="submit" value="Lưu và thêm mới " class="btn3" style="width: 10%">
    <input type="reset" class="btn"  value="Xóa "style="width: 10%">
                  </div>
  </footer>
</section>
</form>
</body>
</html> 
<script src="/js/javascript.js"></script> 