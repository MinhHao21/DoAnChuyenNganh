<?php

namespace Mayviet\Fileupload;

use Laravel\Nova\Fields\Field;

class Fileupload extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'fileupload';
    public function upload(array $tenbang)
    {
        return $this->withMeta(['tenbang' => $tenbang]);
    }
}
