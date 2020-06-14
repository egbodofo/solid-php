<?php

// interface Provider {
//     public function authorize();
// }

// function login(Provider $provider) 
// {
//     $provider->authorize();
// }






interface Provider {
    public function getAuthorizationUrl();
}

// abstract class AbstractProvider {

//     abstract protected function getAuthorizationUrl();
// }

abstract class AbstractProvider {

    protected function related()
    {
        
    }
}

class FacebookProvider implements Provider{

    protected function getAuthorizationUrl()
    {
        return ''; 
    }
}
