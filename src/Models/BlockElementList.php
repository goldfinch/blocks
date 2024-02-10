<?php

namespace Goldfinch\Blocks\Models;

use Goldfinch\Fielder\Fielder;
use Goldfinch\Mill\Traits\Millable;
use Goldfinch\Fielder\Traits\FielderTrait;
use DNADesign\ElementalList\Model\ElementList;
use Goldfinch\Helpers\Traits\ElementListTrait;

class BlockElementList extends ElementList
{
    use FielderTrait, Millable, ElementListTrait;

    public function fielder(Fielder $fielder): void
    {
        // ..
    }
}
