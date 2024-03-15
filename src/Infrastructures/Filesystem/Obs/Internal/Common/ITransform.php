<?php

namespace App\Foundation\Infrastructures\Filesystem\Obs\Internal\Common;

interface ITransform {
    public function transform($sign, $para);
}

