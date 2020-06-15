# Object-oriented programming pillars in PHP

Abstraction (<a href='abstraction.php'>SRP</a>)
    Abstract means a concept or an Idea which is not associated with any particular instance. We use abstract classes when we want to commit the programmer (either oneself or someone else) to write a certain class method, but we are only sure about the name of the method, and not the details of how it should be written. Using abstract class/Interface we express the intent of the class rather than the actual implementation.

Polymorphism (<a href='polymorphism.php'>SRP</a>)
    Polymorphism(many form) is the process of using an operator or function in different ways for different data input. The ability of an object to behave in different forms is call Polymorphism.

Encapsulation (<a href='encapsulation.php'>SRP</a>)
    Encapsulation hides the implementation details of a class from other objects. It deals with adding access modifier. Binding of Data and Functions (that manipulate the data) together and keep both safe from outside interference and misuse is called Encapsulation. It helps restrict access to public methods. Instance variables are kept private and accessor methods are made public to achieve this.
    in our example in the link above, we are hiding the name and dob attributes of person class.

Inheritance (<a href='inheritance.php'>SRP</a>)
    Inheritance is a way to form new classes using classes that have already been defined. Inheritance enables new objects to take on the properties of existing objects. Code duplication occurs when a programmer writes the same code more than once, a problem that inheritance strives to solve.