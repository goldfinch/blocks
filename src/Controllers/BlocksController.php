<?php

namespace Goldfinch\Blocks\Controllers;

use Goldfinch\Blocks\Pages\Blocks;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\CMS\Controllers\ContentController;

class BlocksController extends ContentController
{
    public function index(HTTPRequest $request)
    {
        return $this->renderWith([Blocks::class, 'Page']);
    }
}
