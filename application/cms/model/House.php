<?php
// +----------------------------------------------------------------------
// | 房屋中介系统 [   ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 XXX限公司 [    ]
// +----------------------------------------------------------------------
// | 官方网站: http:// .com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

namespace app\cms\model;

use think\Model as ThinkModel;

/**
 * 房源
 * @package app\cms\model
 */
class House extends ThinkModel
{
    // 设置当前模型对应的完整数据表名称
    protected $table = '__CMS_HOUSE__';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    // 定义修改器
    public function setStartTimeAttr($value)
    {
        return $value != '' ? strtotime($value) : 0;
    }
    public function setEndTimeAttr($value)
    {
        return $value != '' ? strtotime($value) : 0;
    }
    public function getStartTimeAttr($value)
    {
        return $value != 0 ? date('Y-m-d', $value) : '';
    }
    public function getEndTimeAttr($value)
    {
        return $value != 0 ? date('Y-m-d', $value) : '';
    }
}