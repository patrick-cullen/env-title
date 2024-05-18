<?php

namespace PatrickCullen\EnvTitle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PatrickCullen\EnvTitle\EnvTitle
 */
class EnvTitle extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PatrickCullen\EnvTitle\EnvTitle::class;
    }
}
