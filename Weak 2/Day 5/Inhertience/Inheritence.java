class override {
    void display(){
        System.out.println("Override a Word");
    }
}
class override_1 extends override {
    void display(){
        System.out.println("Completion a Override");
    }
}

class Prod {
    Prod() {
        System.out.println("Prod constructor called");
    }

    void eat() {
        System.out.println("Prod is eating...");
    }
}

class Dogi extends Prod {
    Dogi() {
        super(); // calls parent constructor
        System.out.println("Dog constructor called");
    }

    void eat() {
        super.eat(); // calls parent method
        System.out.println("Dog is eating...");
    }
}


class Animal {
    void start(){
        System.out.println("Animal Name start a counting");
    }
}

class Dog extends Animal {
    void puppy(){
        System.out.println("Animal is Include a 1 Dog");
    }
}

class Cow extends Animal {
    void show(){
        System.out.println("Animal Add a one more part");
    }
}

// Multilevel example
class OFF {
    void status() {
        System.out.println("System is OFF now...");
    }
}

class ON extends OFF {
    void display(){
        System.out.println("Multilevel Inheritance Working...");
    }
}

public class Inheritence {
    public static void main(String[] args) {

        // Hierarchical Inheritance
        Animal a1 = new Animal();
        Dog d1 = new Dog();
        Cow c1 = new Cow();

        a1.start();
        d1.puppy();
        c1.show();

        // Multilevel Inheritance
        ON check = new ON();
        check.status();
        check.display();

        // Override a word
        override v1 = new override();
        v1.display();


        override_1 v2 = new override_1();
        v2.display();

        override obj1 = new override_1();
        obj1.display();

        // super keyword
        Prod p1 = new Prod();
        p1.eat();

        Dogi d11 = new Dogi();
        d11.eat();
    }
}
