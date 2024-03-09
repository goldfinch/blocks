<?php

namespace Goldfinch\Blocks\Models;

use Goldfinch\Mill\Traits\Millable;
use DNADesign\Elemental\Models\BaseElement;
use Goldfinch\Helpers\Traits\BaseElementTrait;

class BlockElement extends BaseElement
{
    use Millable, BaseElementTrait;

    private static string $singular_name = 'Block';

    private static string $plural_name = 'Block';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields()->initFielder($this);

        $fielder = $fields->getFielder();

        // ..

        return $fields;
    }
}
