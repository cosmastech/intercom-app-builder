<?php

namespace cosmastech\IntercomAppBuilder\Response\ActionComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/sheets-action
 */
class SheetsAction
{
    public string $type = 'sheet';
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
