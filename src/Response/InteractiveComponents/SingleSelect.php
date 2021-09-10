<?php

namespace cosmastech\IntercomAppBuilder\Response\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\ActionComponents\BaseActionComponent;
use cosmastech\IntercomAppBuilder\Response\InteractiveComponents\Options\OptionParameter;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/single-select
 */
class SingleSelect extends BaseIntercomInteractiveComponent
{
    public string $type = 'single-select';
    public string $id;

    /** @var OptionParameter[] */
    public array $options;

    public ?string $label;
    public ?string $value;

    public ?BaseActionComponent $action;
    public ?string $save_state;
    public ?bool $disabled;

    public function __construct(array $options, string $id)
    {
        $this->options = $options;
        $this->id = $id;
    }
}
