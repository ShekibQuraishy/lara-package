<?php

namespace shekibquraishy\LaraExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \shekibquraishy\LaraExample\LaraExample
 */
class LaraExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \shekibquraishy\LaraExample\LaraExample::class;
    }
}
