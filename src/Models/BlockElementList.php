<?php

namespace Goldfinch\Blocks\Models;

use Goldfinch\Fielder\Fielder;
use Goldfinch\Mill\Traits\Millable;
use Goldfinch\Fielder\Traits\FielderTrait;
use DNADesign\ElementalList\Model\ElementList;

class BlockElementList extends ElementList
{
    use FielderTrait, Millable;

    public function fielder(Fielder $fielder): void
    {
        // ..
    }

    public function getSummary(): string
    {
        return $this->getDescription();
    }

    public function getType(): string
    {
        $default = $this->i18n_singular_name() ?: 'Block';

        return _t(__CLASS__ . '.BlockType', $default);
    }
}
