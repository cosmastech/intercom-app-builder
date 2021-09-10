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

    public function toJson($options)
    {
        return json_encode($this);
    }
}
