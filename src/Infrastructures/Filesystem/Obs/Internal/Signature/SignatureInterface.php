<?php

namespace Juling\Foundation\Infrastructures\Filesystem\Obs\Internal\Signature;

use Juling\Foundation\Infrastructures\Filesystem\Obs\Internal\Common\Model;

interface SignatureInterface
{
	function doAuth(array &$requestConfig, array &$params, Model $model);
}
