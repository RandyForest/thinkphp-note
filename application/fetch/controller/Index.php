<?php

namespace app\fetch\controller;

use think\Controller;

/**
 * 渲染页面
 */
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 
     */
    public function printName($name = 'noname')
    {
        return $this->fetch();
    }
}
