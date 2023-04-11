//Code MVC trong 1 tuần
#Phần 1: TẠO CÁC THÀNH PHẦN BAN ĐẦU CỦA TRANG WEB
1.Tạo trang index
2. Tạo file .htaccess -> để cấu hình server sao cho đường dẫn không cần đặt thư mục vẫn đúng(đặt ngang hàng với index )
3. Tạo file bootstrap.php và thư mục
app
    -controllers
    -models
    -views
    App.php ->class App{}
core
index require->bootstrap: require app/App.php;
4. Xử lý url trong App.php
5. Tạo class Controller trong core -> TẠO function model -> gọi class model
6. Tạo class Model trong ./models ->