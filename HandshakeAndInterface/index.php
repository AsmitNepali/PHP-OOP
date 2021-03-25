<?php

use Spatie\Newsletter\NewsletterFacade;

class CampaignMonitor {

        public function subscribe($eamil) {
            die("Subscribing with CampaignMonitor");
        }
    }

    class Drip {
        public function subscribe($email) {
            die("Subscribing with Drip");
        }
    }

    class NewsLetterSubscriptionController {

        public function store($newsletter)
        {
            $newsletter->subscribe("joe@gmail.com");
        }
    }

    $controller = new NewsLetterSubscriptionController();
    $controller->store(new CampaignMonitor());