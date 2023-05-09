<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace flyaction\captcha;

class CaptchaController
{
    public function index(Captcha $captcha, $config = null)
    {
        $result = [
            'status' => 200,
            'message' => 'success',
            'data' => $captcha->create($config),
        ];

        return $result;
    }
}
