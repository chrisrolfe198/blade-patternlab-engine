<?php

namespace PatternLab\PatternEngine\LaravelBlade;

use \PatternLab\PatternEngine\Rule;

class PatternEngineRule extends Rule
{
    public function __construct()
    {
        parent::__construct();

        $this->engineProp = 'blade';
        $this->basePath = '\PatternLab\PatternEngine\LaravelBlade';
    }
}
