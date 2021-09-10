<?php

namespace cosmastech\IntercomAppBuilder\Response;

use cosmastech\IntercomAppBuilder\Response\Objects\Event;
use cosmastech\IntercomAppBuilder\Response\Objects\Canvas;

class AppResponse extends BaseIntercomComponent
{
    public Canvas $canvas;

    /** @var array|object */
    public $card_creation_options;

    public ?Event $event;

    public function __construct(Canvas $canvas)
    {
        $this->canvas = $canvas;
    }
}
