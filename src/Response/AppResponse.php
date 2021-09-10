<?php

namespace cosmastech\IntercomAppBuilder\Response;

use cosmastech\IntercomAppBuilder\Contracts\Jsonable;
use cosmastech\IntercomAppBuilder\Response\Objects\Event;
use cosmastech\IntercomAppBuilder\Response\Objects\Canvas;

class AppResponse implements Jsonable
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
