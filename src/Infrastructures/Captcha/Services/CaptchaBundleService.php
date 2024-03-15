<?php

declare(strict_types=1);

namespace App\Foundation\Infrastructures\Captcha\Services;

use App\Foundation\Infrastructures\Captcha\Responses\Common\CaptchaResponse;
use App\Foundation\Infrastructures\DevTools\stubs\app\Exceptions\CustomException;
use Exception;
use Illuminate\Support\Str;
use App\Foundation\Infrastructures\Captcha\Captcha;

class CaptchaBundleService
{
    /**
     * @throws Exception
     */
    public function getCaptcha(): array
    {
        try {
            $uuid = strval(Str::uuid());

            $captcha = new Captcha();
            $base64 = $captcha->create($uuid);

            $captchaResponse = new CaptchaResponse();
            $captchaResponse->setCaptcha($base64);
            $captchaResponse->setUuid($uuid);

            return $captchaResponse->toArray();
        } catch (Exception $e) {
            throw new CustomException($e->getMessage());
        }
    }
}
