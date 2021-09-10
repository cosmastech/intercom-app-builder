<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\PresentationComponents;

use cosmastech\IntercomAppBuilder\Response\ContentComponents\ActionComponents\UrlAction;


class Image extends BaseIntercomPresentationComponent
{
    public string $type = 'image';
    public ?string $id;
    public string $url;

    public ?string $align;

    public ?int $width;
    public ?int $height;
    public ?bool $rounded;
    public ?string $bottom_margin;

    public ?UrlAction $action;
}
