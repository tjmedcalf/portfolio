<?php

namespace Portfolio\ExtendedPageTypes;

use PageController;

class HomePageController extends PageController {
    public function FeaturedCS($count = 2) {
        return CaseStudyPage::get()
                    ->filter(array('isFeatured' => 1))
                    ->limit($count);
    }
    
    public function RecentWork($count = 3) {
        return WorkPage::get()
                    ->limit($count);
    }
}