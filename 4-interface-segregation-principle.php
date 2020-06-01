<?php

// Bad Example

interface RestaurantInterface
{
        public function  acceptOnlineOrder();
        public function  payOnline();
        public function  walkInCustomerOrder();
        public function  payInPerson();

}

class OnlineClient implements RestaurantInterface
{
        public function  acceptOnlineOrder()
        {
            //logic for placing online order
        }

        public function  payOnline()
        {
            //logic for paying online 
        }
}




// Good Example

interface OnlineClientInterface
{
        public function  acceptOnlineOrder();
        public function  payOnline();
}

interface WalkInCustomerInterface
{
        public function  walkInCustomerOrder();
        public function  payInPerson();
}

class OnlineClient implements OnlineClientInterface
{
        public function  acceptOnlineOrder()
        {
            //logic for placing online order
        }

        public function  payOnline()
        {
            //logic for paying online 
        }
}

class WalkInCustomer implements WalkInCustomerInterface
{
        public function  walkInCustomerOrder()
        {
            //logic for walk in customer order
        }

        public function  payInPerson()
        {
            //logic for payment in person 
        }
}

?>
