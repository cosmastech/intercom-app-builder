<?php

namespace cosmastech\IntercomAppBuilder\Response\Objects;

use cosmastech\IntercomAppBuilder\Response\Objects\Content;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/canvas
 */
class Canvas extends BaseIntercomResponseObject
{
    public ?Content $content;

    public ?string $content_url;

    /** @var array|object */
    public $stored_data;
}
