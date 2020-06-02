<?php

// Bad Example

class Bird
{
        public function  Fly()
        {
            echo '<script>console.log("I can Fly")</script>';
        }
}

class Parrot extends Bird
{
        public function  Fly()
        {
            echo '<script>console.log("I can Fly")</script>';
            // A parrot can fly, accepted
        }
}

class Ostrich extends Bird
{
        public function  Fly()
        {
            echo '<script>console.log("I can Fly")</script>';
            // But an ostrich can't fly so this won't work
        }
}



// Good Example

class Bird{
	// Methods related to birds
}

class FlyingBirds extends Bird
{
        public function  Fly()
        {
            echo '<script>console.log("I can Fly")</script>';
        }
}

class Parrot extends FlyingBirds{
        public function  Fly()
        {
            echo '<script>console.log("I am a parrot, I can Fly")</script>';
        }
}

class Ostrich extends Bird{
      // Methods related to birds only
}



// Example 2
/**
 * An example of a two different classes implementing an interface
 * but return type of values(array, collection, list).
 *  Now we will be forced to put conditional statements to check what 
 * kind of value is returned from the method we called.
 * If its an array do this, else, if its a collection do
 * that and so on. This kind of checks won’t be necessary
 * if we follow Liskov substitution principle and make sure
 * that returned exception types(if any) and the values have
 * uniform return types.
 */

// Bad Example 2
interface UserRepository
{
    /**
     @return collection
     */
    public function getUserData();
}

class NormalUserRepository implements UserRepository {

    // returh a collection containing user data
    public function getUserData($userID) 
    {
        return DB::table('users')->where('user_id', '=', $userID);
    }
}

class ThirdPartyUserRepository implements UserRepository {

    // returh a collection containing user data
    public function getUserData($userID) 
    {
        return FileSystem::getUserInformation($userID);
    }
}

?>
