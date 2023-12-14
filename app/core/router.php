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
        if (isset($arr[0])) {
            if ($arr[0] == "admin"|| $arr[0] == "user" || $arr[0] == "authen") {
                $this->role = $arr[0];
            }
            unset($arr[0]);
        }

        // controller
        if (isset($arr[1])) {
            if (file_exists("../app/controllers/$this->role/$arr[1]Controller.php")) {
                $this->controller = $arr[1];
            }
            unset($arr[1]);
        }
        $this->controller = $this->controller . "Controller";
        require "../app/controllers/$this->role/$this->controller" . '.php';
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
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}
