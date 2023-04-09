<?php
class App
{
    private $__controller, $__action, $__params;
    public function __construct()
    {
        global $routes;
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }
    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }
    public function handleUrl()
    {
        $url = $this->getUrl();
        $urlArr = array_filter(explode("/", $url));
        $urlArr = array_values($urlArr);
        //XỬ LÝ CONTROLLER
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
            unset($urlArr[0]);
        }
        $this->__controller = ucfirst($this->__controller);
        if (file_exists('app/controllers/' . $this->__controller . '.php')) {
            require_once 'controllers/' . $this->__controller . '.php';
            if (class_exists("$this->__controller")) { //Kiểm tra class tồn tại
                $this->__controller = new $this->__controller;
            } else {
                $this->loadErrors();
            }
        } else {
            $this->loadErrors();
        }

        //XỬ LÝ ACTION

        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        //XỬ LÝ PARAMS
        $this->__params = array_values($urlArr);

        //kiểm tra methods tồn tại
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadErrors();
        }
    }
    public function loadErrors($type = '404')
    {
        require_once 'errors/' . $type . '.php';
    }
}
