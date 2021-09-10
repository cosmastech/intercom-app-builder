<?php

namespace cosmastech\IntercomAppBuilder\Response\Objects;

use cosmastech\IntercomAppBuilder\Response\ContentComponents\BaseContentComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/content
 */
class Content extends BaseIntercomResponseObject
{
    /** @var BaseContentComponent[] */
    public array $components;
}
