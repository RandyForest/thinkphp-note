<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class RequestNote extends Controller
{
    public function index()
    {
        // 创建Request实例
        // $requst = new Request();

        // 使用实例对象的 request
        $requst = $this->request;

        // 打印对象
        dump($requst);
    }
}
