<?php

namespace cosmastech\IntercomAppBuilder\Response\InteractiveComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/text-area
 */
class TextArea extends BaseIntercomInteractiveComponent
{
    public string $type = 'textarea';
    public string $id;
    public ?string $label;
    public ?string $placeholder;
    public ?string $value;
    public ?bool $disabled;
    public ?bool $error;

    public function __construct($id)
    {
        $this->id = $id;
    }
}
