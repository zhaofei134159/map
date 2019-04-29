<?php
namespace App\Http\Controllers;


class CommonController extends Controller
{
    
    public $class='';//控制器名称
    public $method='';//方法名称
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
	//获取当前的控制器和方法名
	$action = \Route::current()->getActionName();
        list($class, $method) = explode('@', $action);
   	
	//解析控制器
	$controller=array();	
	$rule = "/.*\\\(.*?)Controller$/";
	preg_match($rule,$class,$controller);
	
        $this->class = strtolower($controller[1]);
	$this->method = $method;
       

        // parent::__construct();
    }
}
