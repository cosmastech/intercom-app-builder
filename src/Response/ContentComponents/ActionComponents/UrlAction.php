<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\ActionComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/url-action
 */
class UrlAction extends BaseActionComponent
{
    public string $type = 'url';
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
