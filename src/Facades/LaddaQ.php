<?php

namespace LaddaQ\LaddaQ\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaddaQ\LaddaQ\LaddaQ
 */
class LaddaQ extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaddaQ\LaddaQ\LaddaQ::class;
    }
}
