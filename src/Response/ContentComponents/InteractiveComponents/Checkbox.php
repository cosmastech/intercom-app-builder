<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\InteractiveComponents\Options\OptionParameter;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/checkbox
 */
class Checkbox extends BaseIntercomInteractiveComponent
{
    public string $type = 'checkbox';
    public string $id;

    /** @var OptionParameter[] */
    public array $options;

    public ?string $label;
    public ?string $value;
    public ?string $save_state;
    public ?bool $disabled;

    public function __construct(string $id, array $options)
    {
        $this->options = $options;
        $this->id = $id;
    }
}
