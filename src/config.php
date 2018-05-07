<?php
/**
 * Created by PhpStorm.
 * User: lengai
 * Date: 2018/5/8
 * Time: 上午1:01
 */
return [

    'geetest' => [
        'captcha_id' => \think\Env::get('geetest.captcha_id'),
        'private_key' => \think\Env::get('geetest.private_key'),

    ],
];