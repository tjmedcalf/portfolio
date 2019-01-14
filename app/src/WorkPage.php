<?php

namespace Portfolio\ExtendedPageTypes;

use Page;
use SilverStripe\Forms\CheckboxSetField;

class WorkPage extends Page {
    private static $db = [
        
    ];

    private static $many_many = [
        'Categories' => WorkCategory::class,
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', CheckboxSetField::create(
            'Categories',
            'Selected categories',
            $this->Parent()->Categories()->map('ID','Title')
        ), 'Content');

        return $fields;
    }

    public function CategoryList() {
        if($this->Categories()->exists() ) {
            return implode(', ', $this->Categories()->column('Title'));
        }

        return null;
    }
}