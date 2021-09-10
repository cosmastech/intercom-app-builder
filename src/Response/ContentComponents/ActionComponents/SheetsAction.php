<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\ActionComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/sheets-action
 */
class SheetsAction extends BaseActionComponent
{
    public string $type = 'sheet';
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
