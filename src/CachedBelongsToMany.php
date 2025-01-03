<?php namespace Xuhaohao\LaravelModelCache;

use GeneaLabs\LaravelPivotEvents\Traits\FiresPivotEventsTrait;
use Xuhaohao\LaravelModelCache\Traits\Buildable;
use Xuhaohao\LaravelModelCache\Traits\BuilderCaching;
use Xuhaohao\LaravelModelCache\Traits\Caching;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CachedBelongsToMany extends BelongsToMany
{
    use Buildable;
    use BuilderCaching;
    use Caching;
    use FiresPivotEventsTrait;
}
