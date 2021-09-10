<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\InteractiveComponents;

use cosmastech\IntercomAppBuilder\Response\InteractiveComponents\Lists\ItemParameter;
use cosmastech\IntercomAppBuilder\Response\InteractiveComponents\BaseIntercomInteractiveComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/list
 */
class IntercomListComponent extends BaseIntercomInteractiveComponent
{
    public string $type = 'list';
    public ?bool $disabled;

    /** @var ItemParameter[] */
    public array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }
}
