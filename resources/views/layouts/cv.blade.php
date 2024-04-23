<article>

  <section>

  
  @if(session('success'))
      {!! session('success') !!}
  @endif  
  <div class="main-left">
  <div class="from-register">
  <div class="text-from"><h3>Thông tin ứng viên</h3></div>
  <div class="form-txt">
    <p><div class="from"></p>
      <label>Tên ứng viên <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Name" >
      </div>
    
      <!-- f -->
      <p><div class="from"></p>
      <label>Giới tính <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
        <input type="radio" name="Gioitinh" id="0" name="Gioitinh" value="nam">
        <label for="0">Nam</label>
        <input type="radio" name="Gioitinh" id="1" name="Gioitinh" value="nu">
        <label for="1">Nữ</label>
        <input type="radio" name="Gioitinh" id="2" name="Gioitinh" value="khac">
        <label for="2">Khác</label>
      </div>
      <!-- f -->
      <p><div class="from"></p>
      <label>Số điện thoại <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Phone">
      </div>
  
      <!-- f -->
      <p><div class="from"></p>
      <label>Email <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="email" class="txt" placeholder="Nhập" name="Email">
      </div>
    
   <!-- f -->
   <p><div class="from"></p>
      <label>ngày sinh <span class ="text-red-light-1">*</span></label>
      <div class="from-txt">
      <input type="date" class="txt" placeholder="Nhập" name="Date">
      </div>
   
  
   <!-- f -->
   <p><div class="from"></p>
      <label>Địa chỉ hiện tại </label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Address">
      </div>

  
      <div class="text-from"><h3>Trình độ học vấn </h3></div>
  <div class="form-txt">
  <div class="from-col-password">
    <p><div class="from"></p>
    <label>Trình độ học vấn </label>
      <div class="from-txt">
        <input type="radio" name="Education" id="0">
        <label for="0">đại học</label>
        <input type="radio" name="Education" id="1">
        <label for="1">cao đẳng</label>
        <input type="radio" name="Education" id="2">
        <label for="2">trung cấp</label>
        <input type="radio" name="Education" id="3">
        <label for="3">khác</label>
      </div>
   
      <!-- f -->
      <p><div class="from"></p>
      <label>Trường học </label>
      <div class="from-txt">
      <input type="list" class="txt" list="items" placeholder="Nhập" name="School[]">
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
      <div id="inputs-container" style="padding-bottom: 3%;">
    <!-- Initial input -->
  </div>
   <input type="button"  onclick="addInput()" name="school[]" class="btn3" value="+">
    
      <!-- f -->
  
  
      <p><div class="from"></p>
      <label>Ngoại Ngữ </label>
      <div class="from-txt">
      <input type="text" class="txt"  placeholder="nhập" name="Language">
      </div>
   <p><div class="from"></p>
      <label>Chứng chỉ khác</label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Certificate">
      </div>
  
  
  <p><div class="from"></p>
      <label> vị trí </label>
      <div class="from-txt">
     
      </div>
      <div id="inputs-container1" style="padding-bottom: 3%;" >
    <!-- Initial input -->
  </div>
  <input type="button"  onclick="addInput1()" class="btn3" value="+">
  
   
      <!-- f -->
  
  
      <p><div class="from"></p>
      <label>Nghành nghề </label>
      <div class="from-txt">
      <input type="text" class="txt"  placeholder="nhập" name="Career">
      </div>
  
          <p><div class="from"></p>
      <label>kĩ năng</label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Skills">
      </div>

  
  <p><div class="from"></p>
      <label>Mức lương hiện tại </label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Currentsalary">
      </div>

  
  <p><div class="from"></p>
      <label>Mức lương mong muốn</label>
      <div class="from-txt">
      <input type="text" class="txt" placeholder="Nhập" name="Desiredsalary">
      </div>
  </div>
  </div>
  </div>
    </div>
  </div>
  </section>
 

  <div class="main-right">
    <section>
    <div class="from">
    <label for="file" style="width: 30%;">
    <div class="text-file">Ảnh đại diện</div>
    <div class="txt-img">
        <div class="icons"><i class="fa-solid fa-upload fa-bounce" style="color: #000000;"></i></div>
         <div class=""><span class="txt-tetx">Tải ảnh lên</span></div>
        <input type="file" name="Image" id="file">
        </label>
        </div>
        <div class="txt-text1">Chưa chọn 
      <p>chấn nhận định dạng:pdf, docx, doc,odt,pptx,txt,jpeg,png</p>
        </div>
        </section> 
    
    
    
        <section>
    <div class="from">
    <label for="file" style="width: 30%;">
    <div class="text-file"><h>File đính kèm</h></div>
    <div class="txt-link">
        <div class="icons"></div>
         <div class=""><span class="txt-tetx">+</span></div>
        <input type="file" name="file" id="file">
        </label>
        </div>
        </section>
        <section>
        <label class="text-file">Từ khóa *</label>
        <div class="from-txt1">
        <input type="text" class="form-control"  name="keyword" placeholder="Nhập từ khóa, phân tách bằng dấu phẩy" id="keywordInput" >
    
        <div id="keywords">
        <span onclick="updateInput(this)"><button type="button">IT</button></span>
        <span onclick="updateInput(this)"><button type="button">LOSIRP</button></span>
        <span onclick="updateInput(this)"><button type="button">BACKEND</button></span>
        <span onclick="updateInput(this)"><button type="button">FONEAND</button></span>
    
    </div>
        </div>
      </section>
      
    <section>
   
    <div class="from">
        <label class="text-file">Liên kết</label>
        <div class="from-txt1">
        <input type="text" class="txt1" placeholder="Nhập" name="link">
        <input type="text" class="txt1" placeholder="Nhập"  name="link">
        <input type="text" class="txt1" placeholder="Nhập"  name="link">
    
        <div id="inputs-containerlink" style="padding-bottom: 3%;" ></div>
    <input type="button"  onclick="addInputlink()" class="btn3" value="+">
        </div>
        </div>
        
    </div>
    </section>
  </div>
    </article>
    <br>
   
  
  </body>
  </html>
  <script src="/js/javascript.js"></script>
  
  
  
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