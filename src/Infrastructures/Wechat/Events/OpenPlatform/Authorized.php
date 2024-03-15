<?php

namespace App\Foundation\Infrastructures\Wechat\Events\OpenPlatform;

use App\Foundation\Infrastructures\Wechat\Events\OpenPlatform\OpenPlatformEvent;

/**
 * @method string getAppId()
 * @method string getCreateTime()
 * @method string getInfoType()
 * @method string getAuthorizerAppid()
 * @method string getAuthorizationCode()
 * @method string getAuthorizationCodeExpiredTime()
 * @method string getPreAuthCode()
 */
class Authorized extends OpenPlatformEvent
{
}
