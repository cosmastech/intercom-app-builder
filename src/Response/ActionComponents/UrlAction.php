<?php

namespace App\Intercom\Apps\Response\ActionComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/url-action
 */
class UrlAction
{
    public string $type = 'url';
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
