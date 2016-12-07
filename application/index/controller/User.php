<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/30
 * Time: 11:16
 */
namespace app\index\controller;

use app\index\model\Profile;
use app\index\model\User as UserModel;

class User
{
    // 关联新增数据
    public function add()
    {
        $user           = new UserModel;
        $user->name     = 'thinkphp';
        $user->password = '123456';
        $user->nickname = '流年';
        if ($user->save()) {
            // 写入关联数据
            $profile           = new Profile;
            $profile->truename = '刘晨';
            $profile->birthday = '1977-03-05';
            $profile->address  = '中国上海';
            $profile->email    = 'thinkphp@qq.com';
            $user->profile()->save($profile);
            return '用户新增成功';
        } else {
            return $user->getError();
        }
    }
    public function read($id='')
    {
        $user = UserModel::get($id);
        echo $user->name . '<br/>';
        echo $user->nickname . '<br/>';
        echo $user->profile->truename . '<br/>';
        echo $user->profile->email . '<br/>';
    }
}

?>