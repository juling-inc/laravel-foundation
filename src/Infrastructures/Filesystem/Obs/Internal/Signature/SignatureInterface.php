<?php

namespace App\Foundation\Infrastructures\Filesystem\Obs\Internal\Signature;

use App\Foundation\Infrastructures\Filesystem\Obs\Internal\Common\Model;

interface SignatureInterface
{
	function doAuth(array &$requestConfig, array &$params, Model $model);
}
