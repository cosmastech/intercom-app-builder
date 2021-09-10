<?php

namespace cosmastech\IntercomAppBuilder\Traits;

trait Jsonable
{
    public function toJson($options)
    {
        return json_encode($this, $options);
    }
}
