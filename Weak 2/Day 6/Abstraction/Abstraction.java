interface Animal  {
    void sound();
}

class Cat implements Animal {
    public void sound(){
        System.out.println("Meow");
    }
}

abstract class Vehicle {
    abstract void sound();
    void eat(){
        System.out.println("Inner ias running...");
    }
}

class Toyto extends Vehicle {
    void sound(){
        System.out.println("Chilling");
    }
}

public class Abstraction {
    public static void main(String[] args) {
        Toyto t1 = new Toyto();
        Animal a1 = new Cat();
        a1.sound();

        t1.eat();
        t1.sound();

    }
}
