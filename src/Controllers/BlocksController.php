<?php

namespace Goldfinch\Blocks\Controllers;

use Goldfinch\Blocks\Pages\Blocks;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\CMS\Controllers\ContentController;

class BlocksController extends ContentController
{
    // private static $allowed_actions = [];
    // private static $casting = [];

    protected function init()
    {
        parent::init();

        // ..
    }

    public function index(HTTPRequest $request)
    {
        return $this->renderWith([Blocks::class, 'Page']);
    }
}
