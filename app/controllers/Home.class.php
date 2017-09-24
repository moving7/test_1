<?php

class Home extends Controller
{
    public function index($data = array()){
        //加载首页页面
        $this->display('index/index',$data);
    }
     public function show()
     {
         $this->display('index/show');
     }

}





