# Yêu cầu
1) Đọc kĩ file readme
2) Đọc kĩ database
3) Tạo branch mới làm
4) Responsive
5) Hiển thị trên các loại trình duyệt
6) Bảo mật cơ bản
7) SEO cơ bản


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

# Trang admin (xem chi tiết các bảng trong database để thực hiện các tính năng như tạo form,...)
- Tab quản lý thành viên (hiển thị danh sách thành viên, xem thông tin 1 thành viên, xóa thành viên, có thể lọc) --> Bảng User, Address
- Tab quản lý bình luận đánh giá của thành viên (hiển thị danh sách bình luận , có thể lọc theo tour,.. , có thể gửi phản hồi) --> Bảng Comment
- Tab quản lý các liên hệ của khách hàng (xem danh sách liên hệ của khách hàng, có thể lọc) --> Bảng Contact
- Tab quản lý thông tin trên trang public như thay đổi địa chỉ, sdt, hotline, email, thông tin về chuyển khoản --> Bảng General
- Tab quản lý (xem danh sách, thêm, sửa, xóa) danh mục --> Bảng Category
- Tab quản lý (xem danh sách, thêm, sửa, xóa, có thể lọc) tour  (đọc kĩ database để thiết kế) --> Bảng Tour, Tour_Schedule, Tour_Image
- Tab quản lý đặt tour (xem danh sách, xem chi tiết, thực hiện các thao tác xác nhận đặt tour) --> Bảng Booking
- Tab quản lý (xem danh sách, thêm, sửa, xóa, có thể lọc) tin tức (đọc kĩ database để thiết kế) --> Bảng News, Related_Tour
