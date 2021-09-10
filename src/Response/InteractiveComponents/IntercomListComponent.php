<?php

namespace App\Intercom\Apps\Response\InteractiveComponents;

use App\Intercom\Apps\Response\InteractiveComponents\Lists\ItemParameter;

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
