<?php

namespace cosmastech\IntercomAppBuilder\Response\ContentComponents\PresentationComponents;

use cosmastech\IntercomAppBuilder\Response\PresentationComponents\DataTables\FieldValueParameter;
use cosmastech\IntercomAppBuilder\Response\PresentationComponents\BaseIntercomPresentationComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/data-table
 */
class DataTable extends BaseIntercomPresentationComponent
{
    public string $type = 'data-table';

    /** @var FieldValueParameter[] */
    public array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }
}
