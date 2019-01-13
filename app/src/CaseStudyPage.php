<?php

namespace Portfolio\ExtendedPageTypes;

use Page;
use SilverStripe\Forms\DateField;

class CaseStudyPage extends Page {
    private static $can_be_root = false;
    private static $db = [
        'Date' => 'Date',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', 
            DateField::create('Date','Date when work completed')->setDateFormat('yyyy')->setHTML5(false), 
            'Content');

        return $fields;
    }

}