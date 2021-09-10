<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\PresentationComponents;

use cosmastech\IntercomAppBuilder\Response\PresentationComponents\BaseIntercomPresentationComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/text
 */
class Text extends BaseIntercomPresentationComponent
{
    public string $type = 'text';
    public $id;
    public string $text;
    public ?string $align;
    public ?string $style;
    public ?string $bottom_margin;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}