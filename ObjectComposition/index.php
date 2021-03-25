<?php
   
    class Subscription {

        /** 
         * @var \Gateway  
        */

        protected Gateway $gateway;

        public function __construct(Gateway $gateway)
        {
            
        }
        public function create() {
            $this->gateway->findStripeCustomer();
        }

        public function cancel() {
            
        }

        public function invoice() {

        }

        public function swap($newPlan) {

        }
    }

    interface Gateway {
        public function findStripeCustomer();

        public function findStripeSubscriptionByCustomer();
    }

    class StripeGateway implements Gateway {

        public function findStripeCustomer() {

        }

        public function findStripeSubscriptionByCustomer() {

        }
    }

    new Subscription(new StripeGateway());