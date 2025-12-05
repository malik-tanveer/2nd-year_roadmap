class Animal {
    void sound(){
        System.out.println("Animal makes a sound");
    }
}
class Dog extends Animal{
    void sound(){
        System.out.println("Dog is Break");
    }
}

class Cat extends Animal {
    void sound(){
        System.out.println("Cat is Break");
    }
}

class math {
    int add(int a, int b) {
        return a + b;
    }

    int add(int a, int b, int c) {
        return a + b + c;
    }

    double add(double a, double b) {
        return a + b;
    }
}

public class Polymorphis {
    public static void main(String[] args) {
        System.out.println("Polymorphism");

        math m1 = new math();

        System.out.println(m1.add(12, 43));
        System.out.println(m1.add(21.90, 90.21));
        System.out.println(m1.add(21, 43, 32));

        Animal a1 = new Dog();
        Animal a2 = new Cat();

        a1.sound();
        a2.sound();
    }
}