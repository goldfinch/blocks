<?php

namespace Goldfinch\Blocks\Pages;

use SilverStripe\CMS\Model\SiteTree;
use Goldfinch\Blocks\Controllers\BlocksController;

class Blocks extends SiteTree
{
    // private static $allowed_children = [];

    private static $controller_name = BlocksController::class;

    private static $db = [];

    // private static $indexes = [];
    // private static $has_many = [];
    // private static $owned_by = [];
    // private static $casting = [];
    // private static $defaults = [];
    // private static $searchable_fields = [];
    // private static $field_labels = [];

    private static $table_name = 'Blocks';

    private static $default_sort = "\"Sort\"";

    private static $icon = null;

    private static $icon_class = 'font-icon-block-layout-2';

    private static $description = null;

    private static $base_description = 'Block page';

    protected function onBeforeWrite()
    {
        parent::onBeforeWrite();
    }

    public function onBeforeDelete()
    {
        parent::onBeforeDelete();
    }

    public function validate()
    {
        $result = parent::validate();

        return $result;
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        // ..

        return $fields;
    }

    public function getSettingsFields()
    {
        $fields = parent::getSettingsFields();

        // ..

        return $fields;
    }
}
