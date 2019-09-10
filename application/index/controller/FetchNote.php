<?php

namespace app\index\controller;

use think\Controller;

/**
 * fetch()用于渲染页面
 */
class FetchNote extends Controller
{
    public function index($name = '')
    {
        $vars=[
            'name'=>$name
        ];

        return $this->fetch('index/fetch',$vars);
    }
}
