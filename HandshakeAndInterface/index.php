<?php

interface NewsLetter {
    public function subscribe($email);
}
class CampaignMonitor implements NewsLetter {

        public function subscribe($eamil) {
            die("Subscribing with CampaignMonitor");
        }
    }

    class Drip implements NewsLetter {
        public function subscribe($email) {
            die("Subscribing with Drip");
        }
    }

    class NewsLetterSubscriptionController {

        // Duck Typing with $newsletter
        // It doesnt matter with object will pass
        public function store(NewsLetter $newsletter)
        {
            $newsletter->subscribe("joe@gmail.com");
        }
    }

    $controller = new NewsLetterSubscriptionController();
    $controller->store(new CampaignMonitor());