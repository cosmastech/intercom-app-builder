<?php

namespace App\Intercom\Apps\Response\PresentationComponents;

/**
 * @see https://developers.intercom.com/canvas-kit-reference/reference/spacer
 */
class Spacer extends BaseIntercomPresentationComponent
{
    public string $type = 'spacer';
    public ?string $id;

    public ?string $size;

    public const EXTRA_SMALL = 'xs';
    public const SMALL = 's';
    public const MEDIUM = 'm';
    public const LARGE = 'l';
    public const EXTRA_LARGE = 'xl';
}
