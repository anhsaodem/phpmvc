<?php
class ProductModel
{
    public function getProductLists() // Hàm lấy danh sách sản phẩm từ DB
    {
        return [
            'Lap top',
            'Tivi',
            'Telephone'
        ];
    }
    public function getDetail($id) 
    {
        $data = [
            'Quần jean',
            'Áo sơ mi',
            'Aó khoác mỏng'
        ];
        return $data[$id];
    }
}
