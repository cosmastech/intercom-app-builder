<?php

namespace App\Intercom\Apps\Response\InteractiveComponents;

use App\Intercom\Apps\Response\ActionComponents\BaseActionComponent;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/input
 */
class Input extends BaseIntercomInteractiveComponent
{
    public const SAVE_STATE_UNSAVED = 'unsaved';
    public const SAVE_STATE_SAVED = 'saved';
    public const SAVE_STATE_FAILED = 'failed';

    public string $type = 'input';
    public string $id;
    public ?string $label;
    public ?string $placeholder;
    public ?string $value;

    public ?BaseActionComponent $action;
    public ?string $save_state;
    public ?bool $disabled;

    public function __construct($id)
    {
        $this->id = $id;
    }
}
