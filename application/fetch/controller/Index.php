<?php

namespace app\fetch\controller;

use think\Controller;

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
