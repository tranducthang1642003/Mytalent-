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
                            <form action="{{ route('jobs.filter') }}" method="GET">
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
            
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">CV ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">mức độ phù hợp từ khóa </th>
            <th scope="col">Từ khóa </th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($matchPercentages as $cvId => $jobMatches)
            @foreach($jobMatches as $jobId => $matchPercentage)
                <tr>
                    <td>{{ $cvId }}</td>
                    <td>{{ $cvs->where('id', $cvId)->first()->name }}</td>
                    <td>{{ $cvs->where('id', $cvId)->first()->phone }}</td>
                    <td>{{ $cvs->where('id', $cvId)->first()->email }}</td>
                    <td>{{ $matchPercentage }}%</td>
                 <td>
    @if($keywords)
        @foreach(explode(',', $keywords) as $keyword)
            <span class="badge badge-primary">{{ $keyword }}</span>
        @endforeach
    @else
        <span class="text-muted">Không có từ khóa đã lọc.</span>
    @endif</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
 
                    </div>
                </section>
            </div>
        </section>
    </article>
</body>
</html>
