<?php
namespace app\store\controller;

use think\Controller;
use think\Model;
use think\Request;
use think\Db;
use think\Loader;

class Content extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(request $request)
    {
        $filename = ucfirst($request->get('chr')).'.md';
        $filename = $filename?:'Readme.md';
        $file = ROOT_PATH.'Document'.DS.$filename;

        $text = file_get_contents($file);
        $par = new \Parsedown();

        $arr = explode('#code',$text);

        $dis = $arr[0];
        $code = $view = '';
        if(isset($arr[1])){
            $code = $arr[1];
            $code = trim($code,'`');
            $view = $code;
        }

        $dis = $par->text($dis);

        $code = $par->text($code);

        return view('',[
            'dis'      => $dis,
            'code'      => $code,
            'view'      => $view,
        ]);
exit;

        return view('../../common/tempfile/readme',[
            'text'      => $text
        ]);

    }



}
