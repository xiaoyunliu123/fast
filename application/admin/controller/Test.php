<?php

namespace app\admin\controller;

use think\Controller;

/**
 * 产品布局
 *
 * @icon fa fa-circle-o
 */
class Test extends Controller
{
    public function index(){
        return $this->view->fetch();
    }
}
