<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
     * @api {post} /Home/Index/index 意见反馈接口
     * @apiDescription 意见反馈接口
     * @apiGroup Index
     * @apiName  index
     * @apiVersion 1.0.0
     * @apiParam {int} user_id 用户id
     * @apiParam {string} content 反馈内容
     * @apiParamExample {json} 请求参数示例
     * $jsonStr = '{"user_id":2,"content":"我是反馈内容我是反馈内容","data_source":2}';
     * @apiSampleRequest /Home/Index/index
     * @apiSuccessExample {json} 成功返回示例
     *{
     *  "status": true,
     *  "respond": [],
     *  "other": [""],
     *  "code": 1,
     *  "message": "请求成功"
     *}
     * @apiSuccess {Boolean} status 调用状态 true：调用成功 false：调用失败
     * @apiSuccess {Object} respond    返回数据
     * @apiSuccess {Object} other    其他数据
     * @apiSuccess {int} code   状态响应码
     * @apiSuccess {string} message 提示消息
     * @apiErrorExample {json} 失败返回示例
     * {
     *  "status": false,
     *  "respond": [],
     *  "other": [""],
     *  "code": 1032,
     *  "message": "反馈内容不能为空"
     * }
     */
    public function index(){
        $data = $_POST;

        dump($data);
    }
}