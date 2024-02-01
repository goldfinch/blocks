<?php

namespace Goldfinch\Blocks\Harvest;

use Goldfinch\Harvest\Harvest;
use Goldfinch\Blocks\Pages\Blocks;

class BlocksHarvest extends Harvest
{
    public static function run(): void
    {
        Blocks::mill(1)->make([
            'Title' => 'Blocks',
            'Content' => '',
        ]);
    }
}
