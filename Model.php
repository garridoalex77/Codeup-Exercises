<?php

class Model {
    private $atttributes = [];

    public function __set($name, $value)
    {
        $this->atttributes[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->atttributes)) {
            return $this->atttributes[$name];
        }
        return null;
    }
}