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

    private static string $singular_name = 'List';

    private static string $plural_name = 'Lists';

    public function fielder(Fielder $fielder): void
    {
        // ..
    }

    public function getSummary(): string
    {
        $count = $this->Elements()->Elements()->Count();
        $suffix = $count === 1 ? 'element': 'elements';

        return 'Contains ' . $count . ' ' . $suffix;
    }
}
