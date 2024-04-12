function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  var tagInput1 = new TagsInput({
    selector: 'tag-input1',
    duplicate: false,
    max: 10
});


new MultiSelectTag('countries')

function addInput() {
  const inputsContainer = document.getElementById('inputs-container');

  // Tạo một input mới
  const newInputContainer = document.createElement('div');
  newInputContainer.classList.add('input-container');
  newInputContainer.innerHTML = `
    <input type="text" class="txt1" placeholder="Nhập vào đây" name="truonghoc">
    <button onclick="removeInput(this)">Xóa</button>
  `;

  // Thêm input mới vào inputsContainer
  inputsContainer.appendChild(newInputContainer);
}

function removeInput(button) {
  // Lấy ra div chứa input và nút Xóa
  const inputContainer = button.parentNode;
  
  // Xóa div chứa input và nút Xóa
  inputContainer.parentNode.removeChild(inputContainer);
}
//



function addInput1() {
  const inputsContainer = document.getElementById('inputs-container1');

  // Tạo một input mới
  const newInputContainer = document.createElement('div');
  newInputContainer.classList.add('input-container');
  newInputContainer.innerHTML = `
    <input type="text" class="txt1" placeholder="Nhập vào đây" name="vitri">
    // <button onclick="editInput(this)">Sửa</button>
    
  `;
  // Thêm input mới vào inputsContainer
  inputsContainer.appendChild(newInputContainer);
}

function removeInput(button) {5
  // Lấy ra div chứa input và nút Xóa
  const inputContainer = button.parentNode;
  
  // Xóa div chứa input và nút Xóa
  inputContainer.parentNode.removeChild(inputContainer);
}
function editInput(button) {
  // Lấy ra div chứa input và nút Sửa
  const inputContainer = button.parentNode;
  
  // Sửa nội dung của inputContainer
  inputContainer.innerHTML = `
  <dib class ="khung">
  <div class="an" >
  <h2>
  <p><div class="from"></p>
  <label>kĩ năng</label>
  <div class="from-txt">
  <input type="text" class="txt" placeholder="Nhập">
  </div>
</div>
</h2>

</div>
<button onclick="an(this)">ẩn</button>
</div>

`;
}

function an(button) {
  // Lấy ra div chứa nút "ẩn"
  const divToHide = button.previousElementSibling;
  
  // Ẩn div
  divToHide.style.display = 'none';
}
