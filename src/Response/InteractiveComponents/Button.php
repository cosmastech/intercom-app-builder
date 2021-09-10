<?php

namespace cosmastech\IntercomAppBuilder\Response\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\ActionComponents\BaseActionComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/button
 */
class Button extends BaseIntercomInteractiveComponent
{
    public const STYLE_PRIMARY = 'primary';
    public const STYLE_SECONDARY = 'secondary';
    public const STYLE_LINK = 'link';

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
