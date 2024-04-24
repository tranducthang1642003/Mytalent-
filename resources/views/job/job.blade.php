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
    <script src="https://unpkg.com/vanilla-tags-input"></script>
</head>
<body>

    <header>
        <div class="menu">
            <div class="img"><img src="/Image/logo.png" alt=""></div>
            <div class="left">
           <div class="tab">
         
           <button type="button"class="tablinks"> <a href="/cv/listcv">  Danh Sách ứng viên</button></a>
           <button class="tablinks" > <a href="/js_job/list">Danh Sách vị trí </button></a>
        </div>
        <div id="Đăng" class="">
        
        </div>
        <div id="Đăng" class=""></div>
        </div>
        
        <div class="right">
            
      <input type="submit" value="30 Credist" class="btn2" style="width: 30%;background: white; height: 30px; font-size: 17px; color: black;">
            <input type="submit" value="VN" class="btn2" style="width: 15%;
            height: 30px;
            background: no-repeat;
            border: none;
            color: white;
            font-weight: 900;">
        <div class="step">@php
        use Illuminate\Support\Facades\Auth;
        @endphp
        @auth
            <small class="">
             <h4>{{ Auth::user()->email }}</h4>  
            </small>
       
            @csrf
            @else
            
            @endauth
        </div>
        </div>
</header>
<br>
<article>

<section>
    <div class="col-1">
        <div class="text-2"> <span>Danh sách vị trí  </span> / Thêm Vị trí </div>
        <div class="text-3"><i class="fa-solid fa-arrow-left"></i>  <span style="padding-left: 20px">Thông tin vị trí</span> </div>
        <div class="left">
           <div class="tab1">
    
                <button class="tablinks" onclick="openCity(event, 'Đăng nhập')"id="defaultOpen">Thông tin cơ bản</button>
                <button class="tablinks" onclick="openCity(event, 'Đăng ký')" >Thông tin bổ xung</button>
                </div>
        </div>
        </div>


        
    <section>
    <div id="Đăng nhập" class="tabcontent">
        @include('job.layout')
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
<button type="submit" class="btn">Lưu và thêm mới </button>
<input type="reset" class="btn1"  value="Xóa ">
            </form>
</footer>

</body>
</html>
<script src="/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>   


<script>
    // Khởi tạo Tagify
    var input = document.querySelector('#keywordInput');
    var tagify = new Tagify(input);

    function updateInput(element) {
        // Lấy từ khóa từ phần tử được nhấp
        var keyword = element.textContent;

        // Thêm từ khóa vào trường input
        tagify.addTags([keyword]);
        
    }
    
</script>

