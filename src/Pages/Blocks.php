<?php

namespace Goldfinch\Blocks\Pages;

use Goldfinch\Mill\Traits\Millable;
use SilverStripe\CMS\Model\SiteTree;
use Goldfinch\Blocks\Controllers\BlocksController;

class Blocks extends SiteTree
{
    use Millable;

    private static $controller_name = BlocksController::class;

    private static $table_name = 'Blocks';

    private static $default_sort = "\"Sort\"";

    private static $icon = null;

    private static $icon_class = 'font-icon-block-layout-2';

    private static $description = null;

    private static $base_description = 'Block page';
}
