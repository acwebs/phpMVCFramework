<?php

namespace app\core;

/**
 * Class Response
 *
 * @author Andres Cordoba <andrescordoba010@gmail.com>
 * @package app\core
 */

class Response
{

    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}
