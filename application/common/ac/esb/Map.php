<?php
namespace app\common\ac\esb;

use think\Model;
use think\Cookie;
use think\Request;

/*
 * 无成本获取环境变量和参数
 */

class Map extends Base{

    public function __construct(){
        //注册所有的ads
    }

    public function getAll($ints = 0){
    }

    public function getSitecat($ints = 0){
        $map = md('sitecat')->column('title','id');
        return $map;

    }


}

