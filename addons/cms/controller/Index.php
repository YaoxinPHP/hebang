<?php

namespace addons\cms\controller;

use think\Config;

class Index extends Base
{

    public function index()
    {
        Config::set('cms.title', __('Home'));
        Config::set('cms.keywords', '');
        Config::set('cms.description', '');
        // print_r($this->view);exit;
        $obj = new \addons\cms\model\Banner();       	
        return $this->view->fetch('/index',['banner'=>$obj->limit(5)->select()]);
    }

}
