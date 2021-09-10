<?php

namespace cosmastech\IntercomAppBuilder\Traits;

trait Jsonable
{
    public function toJson($options = 0)
    {
        return json_encode($this, $options);
    }
}
