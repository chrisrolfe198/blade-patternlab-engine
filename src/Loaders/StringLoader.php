<?php

namespace PatternLab\PatternEngine\LaravelBlade\Loaders;

use PatternLab\PatternEngine\LaravelBlade\Loaders\Blade\Instance as Blade;

class StringLoader
{
    public function __construct()
    {
        $this->blade = Blade::getInstance();
    }

    public function render($options = array()) {
        // var_dump($options);

        if (!empty($options['string'])) {
            $views = Blade::$views;

            file_put_contents("{$views}/{$options['data']['cacheBuster']}.blade.php", $options['string']);

            return $this->blade->view()->make($options['data']['cacheBuster'])->render();
        }
        return '';
    }
}
