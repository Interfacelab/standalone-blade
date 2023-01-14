<?php

namespace RyanChandler\Blade;

use Illuminate\Container\Container;

class BladeContainer extends Container {
    /** @var \Closure[] */
    private $callbacks = [];
    public function terminating(\Closure $func) {
        $this->callbacks[] = $func;
    }

    public function terminate() {
        foreach($this->callbacks as $callback) {
            $callback();
        }
    }
}