<?php

namespace PatternLab\PatternEngine\LaravelBlade\Loaders\Blade;

use Philo\Blade\Blade;

class Instance
{
    protected static $instance;
    public static $views = __DIR__ . '/../../../storage/views';
    protected static $cache = __DIR__ . '/../../../storage/cache';

    public static function getInstance()
    {
        return self::$instance ?: self::createInstance();
    }

    protected static function createInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Blade(self::$views, self::$cache);
        }
        return self::$instance;
    }
}
