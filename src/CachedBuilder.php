<?php namespace Xuhaohao\LaravelModelCache;

use Xuhaohao\LaravelModelCache\Traits\Buildable;
use Xuhaohao\LaravelModelCache\Traits\BuilderCaching;
use Xuhaohao\LaravelModelCache\Traits\Caching;

class CachedBuilder extends EloquentBuilder
{
    use Buildable;
    use BuilderCaching;
    use Caching;
}
