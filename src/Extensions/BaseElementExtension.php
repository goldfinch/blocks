<?php

namespace Goldfinch\Blocks\Extensions;

use SilverStripe\Forms\FieldList;
use Goldfinch\Blocks\Pages\Blocks;
use SilverStripe\ORM\DataExtension;

class BaseElementExtension extends DataExtension
{
    public function updatePreviewLink(&$link)
    {
        $page = $this->owner->getPage();

        if ($page && $page->ClassName == Blocks::class) {
            $link = null; // $page->AbsoluteLink() . $link;
        }
    }
}
