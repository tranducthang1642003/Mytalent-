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
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
     <script src="https://unpkg.com/@yaireo/tagify"></script>
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
<form action="{{ route('job.filter') }}" method="GET">
    <input type="text" placeholder="Enter job title" id="nganhnghe" name="nganhnghe">
    <button type="submit">Tìm kiếm</button>
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
                        <th scope="col">No</th>
                        <th scope="col">Vị trí</th>
                        <th scope="col">Số lần lọc</th>
                        <th scope="col">Nhà tuyển dụng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Ngày hết hạn</th>
                        <th scope="col">thao tác</th>
                    </tr>
                </thead>
                <tbody>
    @foreach($jobs as $job)
    <tr>
        <td>{{$job->id}}</td>
        <td>{{$job->vitri}} </td>
        <td>03</td>
        <td>{{$job->congty}}</td>
        <td class="{{ $job->trangthai == 'Đang tuyển' ? 'bg-Green-light-2' : 'text-danger' }}"> {{ $job->trangthai }}</td>
        <td>{{$job->created_at}}</td>
        <td>{{$job->created_at}}</td>
        <td>
            <button id="filter-button" class="btn4" onclick="handleFilterClick()">
                <i class="fa-solid fa-pen-nib"></i>
            </button>
            
            <form action="{{ route('job.destroyjob', $job->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn4" onclick="return confirm('Bạn có chắc chắn muốn xóa JOB này?')">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </form>

            <button type="button" class="btn4"> <a href="{{ route('job.edit', $job->id) }}" ><i class="fa-solid fa-pen-to-square"></i></a></button>
        </td>
    </tr>
@endforeach



        
                </tbody>
            </table>
   
           </div>

           <div id="filter-form" class="filter-form">
       <form action="{{ route('job.filter') }}" method="GET">
    @csrf
    <label for="Location">Vị trí:</label><br>
    <input type="text" id="location" name="Location"><br>
    <label for="Currentsalary">Lương:</label><br>
    <input type="text" id="Currentsalary" name="Currentsalary"><br>
    <label for="Skills">Kỹ năng:</label><br>
    <input type="text" id="skills" name="Skills"><br>
    <div class="form-group">
        <label for="keyword">Từ khóa:</label>
        <input type="text" class="form-control"  name="keywords" placeholder="Nhập từ khóa, phân tách bằng dấu phẩy" id="keywordInput" >

    <div id="keywords">
    <span onclick="updateInput(this)" name="keyword"><button type="button">IT</button></span>
    <span onclick="updateInput(this)" name="keyword"><button type="button">LOSIRP</button></span>
    <span onclick="updateInput(this)"name="keyword"><button type="button">BACKEND</button></span>
    <span onclick="updateInput(this)"name="keywords"><button type="button">FONEAND</button></span>

</div>

    <input type="submit" class="btn" value="Lọc và sắp xếp">
</form>






</div>

        </section>
    </div>
 







</body>
</html>



<script>
function handleFilterClick() {
    var form = document.getElementById("filter-form");
  if (form.style.display === "none") {
    form.style.display = "block";
    setTimeout(function(){ form.style.opacity = "1"; }, 100);
  } else {
    form.style.opacity = "0";
    setTimeout(function(){ form.style.display = "none"; }, 1000);
  }
    event.preventDefault();
}
</script>

<script>
    // Initialize Tagify on the input field with id 'keywordInput'
    var input = document.querySelector('#keywordInput');
    var tagify = new Tagify(input);

    // Function to update input field with clicked keyword
    function updateInput(element) {
        var keyword = element.textContent; // Get the keyword from the clicked element
        tagify.addTags([keyword]); // Add the keyword to the Tagify input
    }
</script>
