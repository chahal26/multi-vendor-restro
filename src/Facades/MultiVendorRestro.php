<?php

namespace Chahal26\MultiVendorRestro\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chahal26\MultiVendorRestro\MultiVendorRestro
 */
class MultiVendorRestro extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Chahal26\MultiVendorRestro\MultiVendorRestro::class;
    }
}
