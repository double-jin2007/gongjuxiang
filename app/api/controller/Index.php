<?php

namespace app\api\controller;

use app\common\controller\Api;



/**
 * 首页接口
 */
class Index extends Api
{
    protected $noNeedLogin = ['test'];


    /**
     * 首页
     * @ApiSummary 首页下面活动列表 分页变量page
     * @ApiMethod (GET)
     * @ApiParams (name=page,type=string,required=false,description=分页)
     * @ApiReturn ({"code": 1,"msg": "请求成功","time": "1659060646","data": [{"id": 2,"title": "方特水上公园医护人员福利","status": "进行中"},{"id": 1,"title": "郑州奥帕拉拉水上公园教师福利","status": "进行中"}]})
     */
    public function index()
    {
      
        $page = $this->request->get("page",1);
        $data=['success'];
        $this->success(lang('Please login first'), $data, 10001);
    }

}
