<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents\Lists;

use cosmastech\IntercomAppBuilder\Response\ContentComponents\ActionComponents\BaseActionComponent;
use cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents\BaseIntercomInteractiveComponent;

class ItemParameter extends BaseIntercomInteractiveComponent
{
    public string $type = 'item';
    public string $id;
    public string $title;

    public ?string $subtitle;
    public ?string $tertiary_text;

    public ?string $image;
    public ?int $image_width;
    public ?int $image_height;

    public ?bool $rounded_image;
    public ?bool $disabled;

    public ?BaseActionComponent $action;

    public function __construct(string $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }
}
