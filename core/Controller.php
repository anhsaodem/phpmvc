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
}
