<?php

namespace Asalout\NovaCustomCode;

class IndexCode extends \Laravel\Nova\Fields\Code
{
    public $showOnIndex = true;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'index-code-field';

    public function buttonLabel($text)
    {
        $this->withMeta([
            'button_label' => $text
        ]);

        return $this;
    }
}
