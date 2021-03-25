<?php
   
    class Subscription {

        /** 
         * @var \StripeGateway  
        */

        protected StripeGateway $gateway;

        public function __construct(StripeGateway $gateway)
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


    class StripeGateway {

        public function findStripeCustomer() {

        }

        public function findStripeSubscriptionByCustomer() {

        }
    }