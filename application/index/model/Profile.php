<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 11:15
 */
namespace app\index\model;

use think\Model;

class Profile extends Model
{
    protected $type       = [
        'birthday' => 'timestamp:Y-m-d',
    ];
    public function user()
    {
        // 档案 BELONGS TO 关联用户
        return $this->belongsTo('User');
    }
}

?>