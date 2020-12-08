<?php

namespace app\core\form;

use app\core\Model;

/**
 * Class Field
 *
 * @author Andres Cordoba <andrescordoba010@gmail.com>
 * @package app\core\field
 */

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
            <div class="field">
                <label class="label">%s</label>
                <div class="control">
                    <input class="input %s" type="%s"
                        name="%s" placeholder="" value="%s">
                    <p class="help %s">
                        %s
                    </p>
                </div>
            </div>
            ', 
            $this->attribute,
            $this->model->hasError($this->attribute) ? 'is-danger' : '',
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-danger' : 'is-hidden',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField() {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

}