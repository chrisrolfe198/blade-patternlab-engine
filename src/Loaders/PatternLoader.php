<?php

namespace PatternLab\PatternEngine\LaravelBlade\Loaders;

use \PatternLab\Config;
use PatternLab\PatternEngine\LaravelBlade\Loaders\Blade\Instance as Blade;

class PatternLoader
{
    public function __construct($options)
    {
        // Pattern Paths
        $this->paths = $options['patternPaths'];
        $this->options = $options;
        $this->blade = Blade::getInstance();
    }

    public function render($options = array()) {
        if (!empty($options['pattern'])) {
            $views = Blade::$views;

            if (file_put_contents("{$views}/{$options['data']['cacheBuster']}.blade.php", $options['pattern'])) {
                return $this->blade->view()->make($options['data']['cacheBuster'])->render();
            }
        }
        return '';
    }
}
