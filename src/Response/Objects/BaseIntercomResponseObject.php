<?php

namespace App\Intercom\Apps\Response\Objects;

use App\Intercom\Apps\Contracts\Jsonable;

abstract class BaseIntercomResponseObject implements Jsonable
{
    public function toJson($options)
    {
        return json_encode($this, $options);
    }
}
