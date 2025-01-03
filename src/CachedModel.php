<?php namespace Xuhaohao\LaravelModelCache;

use Xuhaohao\LaravelModelCache\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

abstract class CachedModel extends Model
{
    use Cachable;
}
