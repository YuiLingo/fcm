<?php

namespace Yuilingo\Fcm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yuilingo\Fcm\Skeleton\SkeletonClass
 */
class FcmFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fcm';
    }
}
