<?php
namespace app\super\controller;

use think\Controller;
use think\Model;
use think\Request;
use think\Db;
use think\Loader;

class Index extends Base{

    public function __construct()
    {
        parent::__construct();
    }


    public function index(request $request)
    {

        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
//        // 指定json数据输出
//        return json(['code'=>1,'message'=>'操作完成','data'=>$data]);
        $this->ajaxReturn($data);
//        //================================================
        ac('dt')->run();
//        //================================================






//        //================================================
//        //动作判断拦截
//        if($request->isPost()){
//            $action = $request->action().'Post';
//            return $this->$action($request);
//        }
//        //================================================
//
//        $post = trims($request->post());
//        $validate   = Loader::validate('Indextest');

//        $list = esb('ads')['menulist'];
//        print_r($list);


exit;

        //return view('index/index',[]);
    }




}
