<?php

namespace app\core;

/**
 * Class Model
 *
 * @author Andres Cordoba <andrescordoba010@gmail.com>
 * @package app\core
 */

abstract class Model
{
    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate()
    {
        return Application::$app->router->renderView($view, $params);
    }
}
