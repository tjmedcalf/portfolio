<?php

namespace Portfolio\ExtendedPageTypes;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class WorkHolder extends Page {
    private static $allowed_children = [
        WorkPage::class
    ];
    
    private static $has_many = [
        "Categories" => WorkCategory::class,
    ];

    //private static 

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Categories', GridField::create(
            'Categories',
            'Work categories',
            $this->Categories(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}