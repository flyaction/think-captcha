<?php

namespace flyaction\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package flyaction\captcha\facade
 * @mixin \flyaction\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\captcha\Captcha::class;
    }
}
