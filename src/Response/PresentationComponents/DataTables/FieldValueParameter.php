<?php

namespace App\Intercom\Apps\Response\PresentationComponents\DataTables;

use App\Intercom\Apps\Response\PresentationComponents\BaseIntercomPresentationComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/data-table
 */
class FieldValueParameter extends BaseIntercomPresentationComponent
{
    public string $type = 'field-value';
    public string $field;
    public string $value;

    public function __construct($field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }
}
