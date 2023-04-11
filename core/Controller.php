<?php
class Controller
{
    public function model($modelName)
    {
        if (file_exists(_DIR_ROOT . '/app/models/' . $modelName . '.php')) {
            require_once _DIR_ROOT . '/app/models/' . $modelName . '.php';
            if (class_exists($modelName)) {
                $model = new $modelName();
                return $model;
            }
        }
        return false;
    }
    public function render($view,$data=[]){
        extract($data); //Đối key của mảng thành biến
        if (file_exists(_DIR_ROOT . '/app/views/' . $view . '.php')) {
            require_once _DIR_ROOT . '/app/views/' . $view . '.php';
            // if (class_exists($view)) {
            //     $view = new $view();
            //     return $view;
            // }
        }
    }
}
