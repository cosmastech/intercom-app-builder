<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\PresentationComponents;

use cosmastech\IntercomAppBuilder\Response\PresentationComponents\BaseIntercomPresentationComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/divider
 */
class Divider extends BaseIntercomPresentationComponent
{
    public string $type = 'divider';
    public ?string $id;

    public ?string $bottom_margin;
}
