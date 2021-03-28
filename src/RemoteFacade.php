<?php

namespace Migs\Remote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Migs\Remote\Remote
 */
class RemoteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
