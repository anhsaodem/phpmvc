<?php
class ProductModel
{
    public function getProductLists()
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
