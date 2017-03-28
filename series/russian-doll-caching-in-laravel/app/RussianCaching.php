<?php
/**
 * @author Rizart Dokollari <r.dokollari@linkwi.se>
 * @since  3/27/17
 */

namespace App;


use Illuminate\Support\Facades\Cache;

/**
 * Class RussianCaching
 *
 * @package App
 */
class RussianCaching
{
    /**
     * Living time of cache
     */
    const ONE_YEAR = 525600;
    /**
     * @var array
     */
    protected static $keys = [];

    /**
     * @param $component
     * @return mixed
     */
    public static function setUp($component)
    {
        static::$keys[] = $key = $component->getCacheKey();

        ob_start();

        return Cache::has($key);
    }

    /**
     * @return mixed
     */
    public static function tearDown()
    {
        $key = array_pop(static::$keys);

        $value = ob_get_clean();

        return Cache::remember($key, self::ONE_YEAR, function () use ($value) {
            return $value;
        });
    }
}