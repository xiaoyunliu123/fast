<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Prolay extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'prolay';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = 'deletetime';

    // 追加属性
    protected $append = [
        'category_text'
    ];
    

    
    public function getCategoryList()
    {
        return ['边界安全' => __('边界安全'), '保密安全' => __('保密安全'), '工业安全' => __('工业安全'), '安全服务' => __('安全服务')];
    }


    public function getCategoryTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['category']) ? $data['category'] : '');
        $list = $this->getCategoryList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
