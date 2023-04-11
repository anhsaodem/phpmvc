<?php
class Product extends Controller
{
    public $data = []; // Tạo thuộc tính data là mảng để dễ xử lý dữ liệu
    public function index()
    {
        echo 'Danh sách sản phẩm';
    }
    public function list_product()  //Hàm lấy danh sách sản phẩm 
    {
        //Lấy dữ liệu từ ProductModel
        $product = $this->model('ProductModel');  //1. Tạo đối tượng model
        $dataProduct = $product->getProductLists(); //2. Dùng phương thức để lấy dữ liệu

        $title = "Danh sách sản phẩm";
        $this->data['page_title'] = $title;
        $this->data['sub_content']['title'] = "Danh sách các sản phẩm có trong cửa hàng: ";
        $this->data['sub_content']['product_list'] = $dataProduct;
        $this->data['content'] = 'products/list';

        //RENDERVIEW
        $this->render('layouts/client_layout', $this->data);
    }
    public function detail_product($id = 0) //Hàm lấy chi tiết sản phẩm
    {
        $product = $this->model('ProductModel');
        $title = "Chi tiết sản phẩm";
        $this->data['page_title'] = $title;
        $this->data['sub_content']['title'] = "Chi tiết của sản phẩm bạn đang xem: ";
        $this->data['sub_content']['infor'] = $product->getDetail($id);
        $this->data['content'] = 'products/detail';
        //RENDERVIEW
        $this->render('layouts/client_layout', $this->data);
    }
}
