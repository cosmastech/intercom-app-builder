<?php

namespace cosmastech\IntercomAppBuilder\Response\Objects;

use cosmastech\IntercomAppBuilder\Contracts\Jsonable;

abstract class BaseIntercomResponseObject implements Jsonable
{
    public function toJson($options)
    {
        return json_encode($this, $options);
    }
}
