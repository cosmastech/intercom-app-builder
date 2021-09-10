<?php

namespace cosmastech\IntercomAppBuilder\Response\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\ActionComponents\BaseActionComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/input
 */
class Input extends BaseIntercomInteractiveComponent
{
    public string $type = 'input';
    public string $id;
    public ?string $label;
    public ?string $placeholder;
    public ?string $value;

    public ?BaseActionComponent $action;
    public ?string $save_state;
    public ?bool $disabled;

    public function __construct($id)
    {
        $this->id = $id;
    }
}
