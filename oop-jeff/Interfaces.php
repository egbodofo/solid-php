<?php

// interface Animal {
//     public function communicate();
// }

// class Dog implements Animal {
//     public function communicate()
//     {
//         return 'bark';
//     }
// }

// class Cat implements Animal {
//     public function communicate()
//     {
//         return 'meow';
//     }
// }





// interface logger {
//     public function execute($message);
// }

// class LogToFile implements Logger {
//     public function execute($message)
//     {
//         var_dump('log the message to a file : ' . $message);
//     }
// }

// class LogToDatabase implements Logger{
//     public function execute($message)
//     {
//         var_dump('log the message to a database : ' . $message);
//     }
// }


// class UsersController {

//     protected $logger;

//     public function __construct(Logger $logger)
//     {
//         $this->logger = $logger;
//     }

//     public function show()
//     {
//         $user = 'JohnDoe';

//         $this->logger->execute($user);
//     }
// }

// $controller = new UsersController(new LogToDatabase);

// $controller->show();




// interface CastToJson {
//     public function toJson();
// }

// class User implements CastToJson {}
// class Collection implements CastToJson {}



// interface Repository {
//     public function save($data);
// }

// class MongoRepository implements Repository{
//     public function save($data)
//     {

//     }
// }

// class FileRepository implements Repository{
//     public function save($data)
//     {

//     }
// }






interface CanBeFiltered {
    public function filter();
}

class Favorited implements CanBeFiltered {
    public function filter()
    {

    }
}

class Unwatched implements CanBeFiltered {
    public function filter()
    {
        
    }
}

class Difficulty implements CanBeFiltered {
    public function filter()
    {
        
    }
}