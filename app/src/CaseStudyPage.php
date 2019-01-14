<?php

namespace Portfolio\ExtendedPageTypes;

use Page;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class CaseStudyPage extends Page {
    private static $can_be_root = false;

    private static $db = [
        'Date' => 'Date',
        'isFeatured' => 'Boolean'
    ];

    //Data Relationships ORM
    private static $has_one = [
        "CS_Image" => Image::class,
    ];
    private static $has_many = [
        'Tags' => Tag::class,
    ];

    // Casecading Ownership
    private static $owns = [
        'CS_Image',
        'Tags'
    ];

    //Output into CMS
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', 
            DateField::create('Date','Date when work completed')->setDateFormat('yyyy')->setHTML5(false), 
            'Content');

        //Field -- featured
        $featuredFieldOptions = array("1" => "Feature on Homepage");
        $fields->addFieldToTab('Root.Main', CheckboxSetField::create("isFeatured", "Featured", $featuredFieldOptions),
            'Content');

        //Field -- cs_image
        $fields->addFieldToTab('Root.Attachments', 
            $photo = UploadField::create('CS_Image', 'Main Image'));
        $photo->setFolderName('casestudy-images');

        $fields->addFieldToTab('Root.Tags', GridField::create(
            'Tags',
            'Choose some tags',
            $this->Tags(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}