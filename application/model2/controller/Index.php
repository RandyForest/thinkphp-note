<?php

namespace app\fetch\controller;

use think\Controller;

/**
 * 与index模块同级的模块
 * 访问路径 域名/model2
 */
class Index extends Controller
{
    public function index()
    {
        return view();
    }
}
