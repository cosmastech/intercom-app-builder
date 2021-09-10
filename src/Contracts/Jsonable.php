<?php

namespace App\Intercom\Apps\Contracts;

interface Jsonable
{
    public function toJson($options);
}
