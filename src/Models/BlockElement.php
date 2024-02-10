<?php

namespace Goldfinch\Blocks\Models;

use Goldfinch\Fielder\Fielder;
use Goldfinch\Mill\Traits\Millable;
use Goldfinch\Fielder\Traits\FielderTrait;
use DNADesign\Elemental\Models\BaseElement;
use Goldfinch\Helpers\Traits\BaseElementTrait;

class BlockElement extends BaseElement
{
    use FielderTrait, Millable, BaseElementTrait;

    public function fielder(Fielder $fielder): void
    {
        // ..
    }
}
