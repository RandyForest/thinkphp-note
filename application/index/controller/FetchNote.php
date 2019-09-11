<?php

namespace app\index\controller;

use think\Controller;

/**
 * Controller::fetch()用于渲染页面
 */
class FetchNote extends Controller
{
    public function index($name = '')
    {
        $vars=[
            'name'=>$name
        ];

        // 参数1：视图模板路径，默认访问 index/类名的下划线形式
        // 参数2：传入的变量，可以在视图页使用
        return $this->fetch('index/fetch',$vars);
    }
}
