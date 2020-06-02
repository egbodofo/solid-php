# Examples of SOLID principles in PHP


1) S - Single Responsibility Principle (<a href='1-single-responsibility-principle.php'>SRP</a>)

    This principle states that a class should have one and only one reason to change, meaning that a class should have only one job.

2) O - Open/Closed Principle (<a href='2-open-closed-principle.php'>OCP</a>)

    This principle states that objects or entities should be open for extension, but closed for modification. According to this principle, a software entity must be easily extensible with new features without having to modify its existing code in use.

3) L - Liskov Substitution Principle (<a href='3-liskov-substitution-principle.php'>LSP</a>)

    It states that any implementation of an abstraction (interface) should be substitutable in any place that the abstraction is accepted. Basically it takes care that while coding using interfaces in our code, we not only have a contract of input that the interface receives but also the output returned by different Classes implementing that interface; they should be of same type. The principle says that objects must be replaceable by instances of their subtypes without altering the correct functioning of our system. Liskov substitution says that derived classes must be substitutable for thier base classes. 

4) I - Interface Segregation Principle (<a href='4-interface-segregation-principle.php'>ISP</a>)

    A client should never be forced to implement an interface that it doesn't use or clients shouldn't be forced to depend on methods they do not use.

5) D - Dependency Inversion Principle (<a href='5-dependency-inversion-principle.php'>DIP</a>)

    Entities must depend on abstractions not on concretions. It states that the high level module must not depend on the low level module, but they should depend on abstractions.