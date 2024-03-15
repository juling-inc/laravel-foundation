<?php

namespace Juling\Foundation\Infrastructures\Wechat\Events\OpenPlatform;

use Juling\Foundation\Infrastructures\Wechat\Events\OpenPlatform\OpenPlatformEvent;

/**
 * @method string getAppId()
 * @method string getCreateTime()
 * @method string getInfoType()
 * @method string getComponentVerifyTicket()
 */
class VerifyTicketRefreshed extends OpenPlatformEvent
{
}
