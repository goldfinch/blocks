<?php

namespace Goldfinch\Blocks\Models;

use Goldfinch\Mill\Traits\Millable;
use DNADesign\ElementalList\Model\ElementList;
use Goldfinch\Helpers\Traits\ElementListTrait;

class BlockElementList extends ElementList
{
    use Millable, ElementListTrait;

    private static string $singular_name = 'List';

    private static string $plural_name = 'Lists';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fielder = $fields->fielder($this);

        // ..

        return $fields;
    }

    public function getSummary(): string
    {
        $count = $this->Elements()->Elements()->Count();
        $suffix = $count === 1 ? 'element': 'elements';

        return 'Contains ' . $count . ' ' . $suffix;
    }
}
