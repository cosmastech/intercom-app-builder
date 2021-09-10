<?php

namespace App\Intercom\Apps\Builders;

use App\Intercom\Apps\Contracts\Jsonable;
use App\Intercom\Apps\Response\AppResponse;

abstract class BaseAppBuilder implements Jsonable
{
    public AppResponse $response;

    abstract public function call();

    public function toJson($options)
    {
        return json_encode($this->response, $options);
    }
}
