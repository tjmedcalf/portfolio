<?php

namespace Portfolio\ExtendedPageTypes;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Versioned\Versioned;

class Tag extends DataObject {
    //Define fields..
    private static $db = [
        "Title" => "Varchar",
        "IconCode" => "Varchar"
    ];
    private static $has_one = [
        'CaseStudyPage' => CaseStudyPage::class,
    ];
    private static $summary_fields = [
        "IconCode"=> "Icon code for tag",
        "Title"=> "Title of tag"
    ];

    //Extensions
    private static $extensions = [
        Versioned::class,
    ]; 
    private static $versioned_gridfield_extensions = true;

    public function getCMSFields() {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextField::create('IconCode')
        );

        return $fields;
    }
}