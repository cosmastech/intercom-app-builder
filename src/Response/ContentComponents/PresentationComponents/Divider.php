<?php

namespace cosmastech\IntercomAppBuilder\Response\PresentationComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/divider
 */
class Divider extends BaseIntercomPresentationComponent
{
    public string $type = 'divider';
    public ?string $id;

    public ?string $bottom_margin;
}
