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
<div class="col-2">
    <div class="text-clo-1">
<div class="text-1"> Danh Sách Vị trí</div>
</div>
    <div class="text-clo-2">
        <div class="vitri">
<button class="btn2">Thêm vị trí</button>
<button class="btn2">Thêm vị trí</button>
</div>
</div>
<hr>
<section>
<div class="text-clo-1">
    <div class="search">
    <form class="example"  style="max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
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
    <div class="left">
       <div class="tab1">
       <button class="tablinks" onclick="openCity(event, 'Đăng nhập')">Danh Sách Ứng viên</button>
       <button class="tablinks" onclick="openCity(event, 'Đăng ký')" id="defaultOpen">Danh Sách vị Trí</button>
    </div>
    <div id="Đăng nhập" class="tabcontent"></div>
    <div id="Đăng ký" class="tabcontent"></div>
    </div>
        <div class="table">
      
            <table class="table table-striped">
          
                <thead>
                    
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Ứng viên</th>
                        <th scope="col">Số điẹne thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">kĩ năng</th>
                        <th scope="col">Ngày tải lên</th>
                        <th scope="col">Ngày tải lên</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($cv as $cv)
                        <td>{{$cv->id}}</td>
                        <td>{{$cv->name}} </td>
                        <td>{{$cv->phone}}</td>
                        <td>{{$cv->email}}</td>
                        <td> {{$cv->skills }}</td>
                        <td> {{$cv->keyword }}</td>
                        <td>{{$cv->created_at}}</td>
                        <td>
                        <a href="{{ route('cv.edit', $cv->id) }}" class="btn2">Sửa</a>

                        <form action="{{ route('cv.destroycv', $cv->id) }}" method="POST" style="display: inline;">
                        @csrf
                          @method('DELETE')
                        <button type="submit" class="btn2" onclick="return confirm('Bạn có chắc chắn muốn xóa CV này?')">Xóa</button>
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


