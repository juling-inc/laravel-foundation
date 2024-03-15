<?php

declare(strict_types=1);

namespace App\Foundation\Infrastructures\Captcha\Controllers\Common;

use App\Api\Common\Controllers\BaseController;
use App\Foundation\Infrastructures\Captcha\Responses\Common\CaptchaResponse;
use App\Bundles\Captcha\Services\CaptchaService;
use App\Foundation\Infrastructures\DevTools\stubs\app\Exceptions\CustomException;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use OpenApi\Attributes as OA;

class CaptchaController extends BaseController
{
    #[OA\Get(path: '/captcha', summary: '图片验证码', tags: ['验证码'])]
    #[OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: CaptchaResponse::class))]
    public function index(): JsonResponse
    {
        try {
            $captchaService = new CaptchaService();
            $result = $captchaService->getCaptcha();

            return $this->success($result);
        } catch (CustomException $e) {
            return $this->error($e->getMessage());
        } catch (Exception $e) {
            Log::error($e->getMessage());

            return $this->error('获取图片验证码错误');
        }
    }
}
