<?php
namespace app\store\controller;

use think\Controller;
use think\Model;
use think\Request;
use think\Db;
use think\Loader;

class Index extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(request $request)
    {

        $list = [
            'page'=>'/example/index/page',
            '文字'=>'/example/index/wz',
            '数组'=>'/example/index/arr',
            'event'=>'/example/index/event',
            'md'=>'/example/index/md',
            'esb'=>'/example/index/esb',
        ];


        return view('index/index',[
            'list' => $list
        ]);
    }



}
