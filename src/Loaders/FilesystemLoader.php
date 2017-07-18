<?php

namespace PatternLab\PatternEngine\LaravelBlade\Loaders;

use PatternLab\PatternEngine\LaravelBlade\Loaders\Blade\Instance as Blade;

class FilesystemLoader
{
    public function __construct($options)
    {
        $this->path = $options['templatePath'];
        // Template Path and Partials Path
        $this->options = $options;
        $this->blade = Blade::getInstance();
    }

    public function render($options = array()) {
        // var_dump($this->options, $options['template']);
        // $options = array_merge($options, $this->options);

        if (!empty($options['template'])) {
            if ($options['template'] == 'viewall') {
                $views = Blade::$views;
                file_put_contents("{$views}/viewall.blade.php", file_get_contents("../styleguidekit-blade-default/views/viewall.blade.php"));
            }

            return $this->blade->view()->make($options['template'], $options['data'])->render();
        }
        return '';
    }
}
