<?php

namespace cosmastech\IntercomAppBuilder\Builders;

use cosmastech\IntercomAppBuilder\Contracts\Jsonable;
use cosmastech\IntercomAppBuilder\Response\AppResponse;

abstract class BaseAppBuilder implements Jsonable
{
    public ?AppResponse $response;

    abstract public function call();

    public function toJson($options)
    {
        return json_encode($this->response, $options);
    }
}
