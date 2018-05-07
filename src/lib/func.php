<?php
/**
 * Created by PhpStorm.
 * User: lengai
 * Date: 2018/5/7
 * Time: 下午6:22
 */


use Captcha\Lib\GeetestLib;
use think\Config;

const VERFY_TYPE_ACTIVE = 1;

/**验证验证码是否正确
 * @param $geetest_challenge
 * @param $geetest_validate
 * @param $geetest_seccode
 * @param int $type
 * @return int
 */
function geetest_check($geetest_challenge, $geetest_validate, $geetest_seccode, $type = VERFY_TYPE_ACTIVE, $data = null)
{

    $captcha_id = Config::get('captcha_id');
    $private_key = Config::get('private_key');
    $geetest = new GeetestLib($captcha_id, $private_key);
    if ($type == VERFY_TYPE_ACTIVE) {
        $result = $geetest->success_validate($geetest_challenge, $geetest_validate, $geetest_seccode,$data);

    } else {
        $result = $geetest->fail_validate($geetest_challenge, $geetest_validate, $geetest_seccode);
    }

    return $result;
}

function geetest_pre_process()
{

    $captcha_id = Config::get('captcha_id');
    $private_key = Config::get('private_key');
    $geetest = new GeetestLib($captcha_id, $private_key);
    $status = $geetest->pre_process();
    $response = $geetest->get_response();
    $response['status'] = $status;
    return $response;


}