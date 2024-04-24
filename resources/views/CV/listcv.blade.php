<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/list.css">
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
<article>
<section>
<div class="col-2">
    <div class="text-clo-1">
<div class="text-1"> Danh Sách Ứng viên</div>
</div>
    <div class="text-clo-2">
        <div class="vitri">
<button class="btn5">Xuất file </button>
<button class="btn5">Tải Cv</button>
<button class="btn2"> <a href="/cv/add"> Thêm Cv </a></button>
</div>
</div>
<hr>
<section>
<div class="text-clo-1">
    <div class="search">
    <form class="example"  style="max-width:295px">
  <input type="text" placeholder="Tìm kiếm " name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    </div>
</div>

<div class="text-clo-2">
<label for="cars">Trạng thái</label>
<select id="cars" name="cars">
  <option value="volvo">Tất cả</option>
  <option value="saab">Saab 95</option>
  <option value="mercedes">Mercedes SLK</option>
  <option value="audi">Audi TT</option>
</select>
</form>
<label for="cars">Ngày tạo</label>
<input type="date" name="" id="">
</div>
</section>



<section>
        <div class="table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Ứng viên</th>
                        <th scope="col">Số điẹne thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Vị trí</th>
                        <th scope="col">Kinh Ngiệm</th>
                        <th scope="col">Ngày tải lên</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($cv as $cv)
                        <td>{{$cv->id}}</td>
                        <td><div class="bg-Navy-light-2">{{$cv->Name}}</div> </td>
                        <td>{{$cv->Phone}}</td>
                        <td>{{$cv->Email}}</td>
                        <td> {{$cv->Location }}</td>
                        <td> {{$cv->Experience }}</td>
                        <td>{{$cv->updated_at}} <span class="text-Yello-light-2">NEW</span> </div></td>
                        <td>
                        
<button type="button" {{ route('cv.Edit', $cv->id) }} class="btn5"><i class="fa-solid fa-pen"></i></button>


                        <form action="{{ route('Cv_Destroy_Cv', $cv->id) }}" method="POST" style="display: inline;">
                        @csrf
                          @method('DELETE')
                        <button type="submit" class="btn2" onclick="return confirm('Bạn có chắc chắn muốn xóa CV này?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
        </tr>   
        @endforeach
                </tbody>
             
            </table>
         
           </div>
     
        </section>
    </div>
    <!-- l -->
  

</body>
</html>


