<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\PresentationComponents;

use cosmastech\IntercomAppBuilder\Response\PresentationComponents\BaseIntercomPresentationComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/spacer
 */
class Spacer extends BaseIntercomPresentationComponent
{
    public string $type = 'spacer';
    public ?string $id;

    public ?string $size;
}
