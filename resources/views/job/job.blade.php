<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
</head>
<body>
<header>
    <div class="menu">
        <div class="img"><img src="/Image/logo.png" alt=""></div>
        <div class="left">
            <div class="tab">
                <button type="button" class="tablinks"><a href="/cv/listcv">Danh Sách ứng viên</a></button>
                <button class="tablinks"><a href="/js_job/list">Danh Sách vị trí</a></button>
            </div>
        </div>
        <div class="right">
            <input type="submit" value="30 Credits" class="btn2" style="width: 30%; background: white; height: 30px; font-size: 17px; color: black;">
            <input type="submit" value="VN" class="btn2" style="width: 15%; height: 30px; background: no-repeat; border: none; color: white; font-weight: 900;">
            <div class="step">
                @auth
                    <small><h4>{{ Auth::user()->email }}</h4></small>
                    @csrf
                @endauth
            </div>
        </div>
    </div>
</header>

<br>
<article>
    <section>
        <div class="col-1">
            <div class="text-2"><span>Danh sách vị trí</span> / Thêm Vị trí</div>
            <div class="text-3"><i class="fa-solid fa-arrow-left"></i> <span style="padding-left: 20px">Thông tin vị trí</span></div>
            <div class="left">
                <div class="tab1">
                    <button class="tablinks" onclick="openCity(event, 'Đăng nhập')" id="defaultOpen">Thông tin cơ bản</button>
                    <button class="tablinks" onclick="openCity(event, 'Đăng ký')">Thông tin bổ xung</button>
                </div>
            </div>
        </div>
    </section>

    <article>
        <form method="POST" action="{{ route('job.add') }}" enctype="multipart/form-data">
            @csrf
            <section>
                <div id="Đăng nhập" class="tabcontent">
                    @include('job.layouts.layout')
                </div>
            </section>
    </article>

    <section>
        <div id="Đăng ký" class="tabcontent">
            @include('job.layouts.additional')
        </div>
    </section>

    <section>
        <footer></footer>
    </section>

    <div class="col-xoa">
        <div class="col-4"> <input type="reset" class="btnxoa"  value="Xóa "></div>
        <div class="col-3"> <button type="submit" class="btnthem">Lưu và thêm mới</button></div>
    </div>
    </form>
</article>

</body>
</html>

<script src="/js/javascript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script>
   
    var input = document.querySelector('#keywordInput');
    var tagify = new Tagify(input);
    function updateInput(element, keyword) {
        if (keyword.trim() !== '') {
            var keywords = keyword.split(',');
            tagify.addTags(keywords);
        }
        var newKeyword = element.textContent.trim();
        tagify.addTags([newKeyword]);
    }
</script>