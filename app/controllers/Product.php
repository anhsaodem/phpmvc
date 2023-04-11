<?php
class Product extends Controller
{
    public $data = [];
    public function index()
    {
        echo 'Danh sách sản phẩm';
    }
    public function list_product()
    {
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductLists();
        $title = "Danh sách sản phẩm có trong cửa hàng:";
        $this->data['product_list'] = $dataProduct;
        $this->data['page_title'] = $title;
        //RENDERVIEW
        $this->render('product/list', $this->data);
    }
    public function detail_product()
    {
        $product = $this->model('ProductModel');
        $this->data['infor'] = $product->getDetail(1);
        //RENDERVIEW
        $this->render('product/detail',$this->data);
    }
}
