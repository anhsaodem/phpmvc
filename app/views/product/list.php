LIST PRODUCT
<?php
echo '<pre>';
print_r($page_title);
echo '</pre>';
foreach ($product_list as $index => $product) {
    echo '<li>Sản phẩm thứ ' . $index . ': ' . $product . '</li>';
}
