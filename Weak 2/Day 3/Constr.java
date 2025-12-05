class Cons {
    String brand;
    int year;

    Cons() {
        brand = "Honda";
        year = 2022;
        System.out.println("Constructor Called!");
    }

    void display() {
        System.out.println("Brand: " + brand + ", Year: " + year);
    }
}

class Student {
    String name;
    int age;
    String roll;

    Student(String name, int age, String roll) {
        this.name = name;
        this.age = age;
        this.roll = roll;
    }

    void show() {
        System.out.println(name + " " + age + " " + roll);
    }
}

public class Constr {
    public static void main(String[] args) {
        // System.out.println("Hello World!");
        Cons c1 = new Cons();
        c1.display();

        Student s1 = new Student("Raza", 16, "CR");
        Student s2 = new Student("Hamza", 21, "GR");


        s1.show();
        s2.show();

    }
}