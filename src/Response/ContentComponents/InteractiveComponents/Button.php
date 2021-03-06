<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\ContentComponents\ActionComponents\BaseActionComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/button
 */
class Button extends BaseIntercomInteractiveComponent
{
    public string $type = 'button';
    public string $id;
    public string $label;
    public BaseActionComponent $action;
    public ?string $style;
    public ?bool $disabled;

    public function __construct(BaseActionComponent $action, $label, $id)
    {
        $this->action = $action;
        $this->label = $label;
        $this->id = $id;
    }
}
