<?php

namespace Portfolio\ExtendedPageTypes;

use Page;

class CaseStudyHolder extends Page {
    private static $allowed_children = [
        CaseStudyPage::class
    ];
}