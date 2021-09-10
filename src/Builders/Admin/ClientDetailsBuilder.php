<?php

namespace App\Intercom\Apps\Builders\Admin;

use App\Intercom\Apps\Response\AppResponse;
use App\Intercom\Apps\Builders\BaseAppBuilder;
use App\Intercom\Apps\Exceptions\AdminAccessDeniedException;


class ClientDetailsBuilder extends BaseAppBuilder
{
    protected object $request;

    public function __construct($request)
    {
        if (is_object($request)) {
            $request = json_decode(json_encode($request));
        }

        $this->response = new AppResponse();
    }

    public function call(): AppResponse
    {

        return $this->response;
    }

    /**
     * 
     *
     * @return bool
     * @throws AdminAccessDeniedException
     */
    protected function confirmAdminAccess()
    {
        return true;
    }
}
