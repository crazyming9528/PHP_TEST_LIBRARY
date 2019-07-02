<?php

namespace app\dev\controller;

use app\common\util\AjaxReturn;
use think\Controller;
use think\Exception;
use think\Request;
use app\dev\model\Synchronous;

class Sync extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($currentPage = 1, $pageSize = 10)
    {
        $data = Synchronous::field([])->paginate(['list_rows' => $pageSize, 'page' => $currentPage]);

        return json(AjaxReturn::jsonPack($data));
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {

//        $allData = $request->param();

        try {

            $allData = $request->only(['channel', 'type', 'content', 'remark']);
            $sync_db = new Synchronous();
            $sync_db->allowField(true)->save($allData);
            return json(AjaxReturn::jsonPack());

        } catch (Exception $e) {
            return json(AjaxReturn::jsonPack([], AjaxReturn::ERROR_RESPONSE));
        }


    }

    /**
     * 显示指定的资源
     *
     * @param int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param \think\Request $request
     * @param int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
