<?php

namespace MOSS\MOSS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MOSS\MOSS\MOSS
 */
class MOSS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MOSS\MOSS\MOSS::class;
    }
}
