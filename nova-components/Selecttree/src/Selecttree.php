<?php

namespace Mayviet\Selecttree;

use Laravel\Nova\Fields\Field;

class Selecttree extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'selecttree';
    public function api(array $api)
    {
        return $this->withMeta(['api' => $api]);
    }
}
