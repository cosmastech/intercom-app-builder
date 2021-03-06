<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents\Options;

use cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents\BaseIntercomInteractiveComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/single-select
 */
class OptionParameter extends BaseIntercomInteractiveComponent
{
    public string $type = 'option';
    public string $id;
    public string $text;

    public ?bool $disabled;

    public function __construct(string $id, string $text)
    {
        $this->id = $id;
        $this->text = $text;
    }
}
