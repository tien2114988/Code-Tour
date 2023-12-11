<?php
class Router
{
    // role/controller/method/param[0]/param[1]/...
    // example : user/home/introduction
    // default : user/home/index
    protected $role = 'user';
    protected $controller = 'home';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $arr = $this->processUrl();

        // role
        if (!empty($arr[0])) {
            $this->role = $arr[0];
            unset($arr[0]);
        }

        // controller
        if (isset($arr[1])) {
            if (file_exists("./controllers/$this->role/$arr[1]Controller.php")) {
                $this->controller = $arr[1];
                unset($arr[1]);
            }
        }
        $this->controller = $this->controller . "Controller";
        require "./controllers/$this->role/$this->controller" . '.php';
        $this->controller = new $this->controller();

        // method
        if (isset($arr[2])) {
            if (method_exists($this->controller, $arr[2])) {
                $this->action = $arr[2];
            }
            unset($arr[2]);
        }

        // parameters
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    public function processUrl()
    {
        $url = $this->getUrl();
        return explode('/', filter_var(trim($url, '/')));
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
}
