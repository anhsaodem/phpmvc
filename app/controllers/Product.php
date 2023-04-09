<?php
class Product{
    public function index(){
        echo 'Danh sách sản phẩm';
    }
    public function detail($id=""){
        echo 'Sản phẩm thứ:'.$id;
    }
}