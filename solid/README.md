# Examples of SOLID principles in PHP


1) S - Single Responsibility Principle 
    (<a href='1-single-responsibility-principle/good-example.php'>SRP-Good</a>)
    (<a href='1-single-responsibility-principle/bad-example.php'>SRP-Bad</a>)

    This principle states that a class should have one and only one reason to change, meaning that a class should have only one job.

2) O - Open/Closed Principle 
    (<a href='2-open-closed-principle/good-example.php'>OCP-Good</a>)
    (<a href='2-open-closed-principle/bad-example.php'>OCP-Bad</a>)

    This principle states that objects or entities should be open for extension, but closed for modification. According to this principle, a software entity must be easily extensible with new features without having to modify its existing code in use.

3) L - Liskov Substitution Principle
    (<a href='3-liskov-substitution-principle/good-example.php'>LSP-Good</a>)
    (<a href='3-liskov-substitution-principle/bad-example.php'>LSP-Bad</a>)

    The Liskov Substitution Principle states that any class that is the child of a parent class should be usable in place of its parent without any unexpected behaviour. It tells us that any implementation of an abstraction (interface) should be substitutable in any place the abstraction is accepted. Method signatures must match(Methods must take the same parameters), Inherited methods should return the same type as that of its parent(output must be the same) and if any exception or (error) message, they should be the same anywhere an abstraction or interface is used. If we do follow Liskovs principle, it won’t be necessary to check if the values are of the type an array, collection, list etc.

4) I - Interface Segregation Principle
    (<a href='4-interface-segregation-principle/good-example.php'>ISP-Good</a>)
    (<a href='4-interface-segregation-principle/bad-example.php'>ISP-Bad</a>)

    Interface Segregation tells the developer not to write code that forces a client to implement an interface that it doesn’t make use of. This principle will make sure that classes are sharing only the required knowledge. An interface becomes fat when it’s handling too many contracts or more than one responsibility at the time.

5) D - Dependency Inversion Principle
    (<a href='5-dependency-inversion-principle/good-example.php'>DIP-Good</a>)
    (<a href='5-dependency-inversion-principle/bad-example.php'>DIP-Bad</a>)

    High level modules should never depend on Low level modules. Instead High level modules can depend upon an abstraction and the low level module then depends on that same abstraction. Dependencies must be done on interfaces or on abstract classes rather than on "concrete" classes.