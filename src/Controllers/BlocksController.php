<?php

namespace Goldfinch\Blocks\Controllers;

use SilverStripe\CMS\Controllers\ContentController;

class BlocksController extends ContentController
{
    private static $allowed_actions = [];

    private static $casting = [];

    protected function init()
    {
        parent::init();

        // ..
    }
}
