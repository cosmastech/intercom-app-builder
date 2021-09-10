<?php

namespace cosmastech\IntercomAppBuilder\Response\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\ActionComponents\BaseActionComponent;
use cosmastech\IntercomAppBuilder\Response\InteractiveComponents\Options\OptionParameter;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/dropdown
 */
class Dropdown extends BaseIntercomInteractiveComponent
{
    public string $type = 'checkbox';
    public string $id;

    /** @var OptionParameter[] */
    public array $options;

    public ?string $label;
    public ?string $value;
    public ?string $save_state;
    public ?bool $disabled;

    public ?BaseActionComponent $action;

    public function __construct(string $id, array $options)
    {
        $this->options = $options;
        $this->id = $id;
    }
}
