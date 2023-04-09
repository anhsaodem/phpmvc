<?php

class Home extends Controller
{
    public $model_home;
    public function __construct()
    {
       $this->model_home = $this->model('HomeModel'); 
    }
    public function index()
    {
        echo 'List items:'.'</br>';
        $data = $this->model_home->getList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        echo '<hr>';
        $detail= $this->model_home->getDetail(1);
        print_r($detail);
    }
    public function detail($id = "", $slug = "")
    {
        echo $id . '--' . $slug;
    }
    public function search()
    {
        $keyword = $_GET['keyword'];
        echo "$keyword";
    }
}
