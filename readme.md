# Yêu cầu
1) Responsive
2) Hiển thị trên các loại trình duyệt
3) Bảo mật cơ bản
4) SEO cơ bản


# Cấu trúc file (mn tuân theo khi viết code để dễ dàng quản lý)

### index.php : file chạy đầu tiên, require các class base ở folder core

### core : chứa các file base (database, controller, router)
1) database.php : kết nối database
2) controller.php : class controller cha chứa các hàm
- view{Role}(\$view,$data) : dùng cho controller thuộc role(user/admin/authen) truyền data và render ra view
- model(\$model) : require và tạo đối tượng model tương ứng
3) router.php : phân tách url, cấu trúc url như sau 
-  role/controller/method/param[0]/param[1]/...
- role (admin/user/authen), controller(tên controller sẽ xử lý), method(method trong controller đó), param(tham số truyền vào)
- ex : user/home/introduction : gọi đến method introduction trong controller homeController ở admin
- default : / -> user/home/index
    ###### Lưu ý : đặt tên model và controller theo ĐÚNG cấu trúc (file : abcModel.php, class : AbcModel, tương tự vs controller)

### controllers : extend controller ở file core, làm theo cấu trúc sau :
1) tạo model bằng method model(\$model)  
2) xử lý theo tác dữ liệu vs model
3) truyền data và render view bằng method view{Role}(\$view,$data)
4) $view thường là file layout.php
5) $data là mảng dữ liệu truyền ra view, key đầu tiên thường là page 
    ###### Lưu ý : $view, page chỉ cần truyền tên của file tính từ role 
    ex : viewUser('layout',...) --> views/user/layout.php, 
    ['page'=>'home/homepage' ] --> views/user/home/homepage.php

### models : tạo biến $database từ file database.php trong core, tạo các phương thức để xử lý CRUD 

### views : 
- partials : chứa các file dùng chung (header,footer)
- layout.php : controller gọi đến file này để render ra view
- $data['page'] : đã nói ở phần controllers
- \$path : đường dẫn chính (app/ hoặc /), mọi người phải include \$path trước mỗi đường dẫn khi chuyển trang 
- ex : href="\<?php echo $path; ?>home/introduction" 
  home/introduction chính là controller và method đã nói ở phần core 


### Lưu ý : làm theo cấu trúc file để dễ quản lý code, đọc code để biết thêm chi tiết :))))) 