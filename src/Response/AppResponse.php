<?php

namespace App\Intercom\Apps\Response;

use App\Intercom\Apps\Contracts\Jsonable;
use App\Intercom\Apps\Response\Objects\Event;
use App\Intercom\Apps\Response\Objects\Canvas;


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
