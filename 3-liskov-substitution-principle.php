<?php

// Bad Example

class Bird
{
        public function  Fly()
        {
            return “I can Fly”;
        }
}

class Parrot extends Bird
{
        public function  Fly()
        {
            return “I can Fly”;
        }
}

class Ostrich extends Bird
{
        public function  Fly()
        {
            return “I can Fly”;
            // But ostrich can't fly
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
            Return “I can Fly”;
        }
}

class Parrot extends FlyingBirds{
        public function  Fly()
        {
            Return “I can Fly”;
        }
}

class Ostrich extends Bird{
      // Methods related to birds
}


?>
