<?php

namespace Portfolio\ExtendedPageTypes;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class WorkCategory extends DataObject {
    private static $db = [
        "Title" => "Varchar",
    ];

    private static $has_one = [
        "WorkHolder" => WorkHolder::class
    ];

    private static $belongs_many_many = [
        'WorkPages' => WorkPage::class,
    ];

    public function getCMSFields() {
        return FieldList::create(
            TextField::create('Title')
        );
    }
}