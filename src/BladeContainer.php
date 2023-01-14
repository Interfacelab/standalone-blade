<?php

namespace RyanChandler\Blade;

use Illuminate\Container\Container;

class BladeContainer extends Container {
    public function terminating(\Closure $func) {
        $func();
    }
}