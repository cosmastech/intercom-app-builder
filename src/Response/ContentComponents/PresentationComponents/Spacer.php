<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\PresentationComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/spacer
 */
class Spacer extends BaseIntercomPresentationComponent
{
    public string $type = 'spacer';
    public ?string $id;

    public ?string $size;
}
