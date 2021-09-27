<?php

namespace cosmastech\IntercomAppBuilder\Requests;

use Spatie\DataTransferObject\FlexibleDataTransferObject;

class IntercomAppRequest extends FlexibleDataTransferObject
{
    public ?string $workspace_id;

    public ?object $admin;

    public ?object $user;

    public ?object $conversation;

    public ?object $card_creation_options;

    public ?object $contact;

    public ?object $context;

    public ?string $component_id;

    public ?object $current_canvas;

    public ?object $input_values;
}
