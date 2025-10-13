# Day 7 – Mini Project + Revision: Student Management System

## 🎯 Goal

Apply all OOP principles together in a real-world project.

---

## 📘 Concepts Covered

* Classes & Objects
* Constructors
* Inheritance
* Polymorphism
* Encapsulation
* Abstraction

---

## 💻 Mini Project – Student Management System

### Overview

* Add, Update, Delete, Display Students
* Store data using `ArrayList`
* Encapsulation for secure fields
* Inheritance from abstract class
* Polymorphism with method overriding

---

### Source Code

```java
import java.util.ArrayList;
import java.util.Scanner;

// Abstraction + Inheritance
abstract class Person {
    protected String name;
    protected int age;
    abstract void displayInfo();
}

// Encapsulation + Constructor
class Student extends Person {
    private int id;
    private String course;

    public Student(int id, String name, int age, String course) {
        this.id = id;
        this.name = name;
        this.age = age;
        this.course = course;
    }

    // Getters & Setters
    public int getId() { return id; }
    public String getName() { return name; }
    public int getAge() { return age; }
    public String getCourse() { return course; }

    public void setName(String name) { this.name = name; }
    public void setAge(int age) { this.age = age; }
    public void setCourse(String course) { this.course = course; }

    @Override
    void displayInfo() {
        System.out.println("ID: " + id + " | Name: " + name + " | Age: " + age + " | Course: " + course);
    }
}

// Main management class
public class StudentManagementSystem {
    static ArrayList<Student> students = new ArrayList<>();
    static Scanner sc = new Scanner(System.in);

    public static void main(String[] args) {
        int choice;
        do {
            System.out.println("\n===== Student Management System =====");
            System.out.println("1. Add Student");
            System.out.println("2. Display Students");
            System.out.println("3. Update Student");
            System.out.println("4. Delete Student");
            System.out.println("5. Exit");
            System.out.print("Enter your choice: ");
            choice = sc.nextInt();

            switch (choice) {
                case 1 -> addStudent();
                case 2 -> displayStudents();
                case 3 -> updateStudent();
                case 4 -> deleteStudent();
                case 5 -> System.out.println("Exiting...");
                default -> System.out.println("Invalid choice! Try again.");
            }
        } while (choice != 5);
    }

    static void addStudent() {
        System.out.print("Enter ID: ");
        int id = sc.nextInt();
        sc.nextLine();
        System.out.print("Enter Name: ");
        String name = sc.nextLine();
        System.out.print("Enter Age: ");
        int age = sc.nextInt();
        sc.nextLine();
        System.out.print("Enter Course: ");
        String course = sc.nextLine();

        students.add(new Student(id, name, age, course));
        System.out.println("✅ Student added successfully!");
    }

    static void displayStudents() {
        if (students.isEmpty()) {
            System.out.println("No students found!");
            return;
        }
        System.out.println("\n--- Student List ---");
        for (Student s : students) {
            s.displayInfo();
        }
    }

    static void updateStudent() {
        System.out.print("Enter Student ID to update: ");
        int id = sc.nextInt();
        sc.nextLine();
        for (Student s : students) {
            if (s.getId() == id) {
                System.out.print("Enter new name: ");
                s.setName(sc.nextLine());
                System.out.print("Enter new age: ");
                s.setAge(sc.nextInt());
                sc.nextLine();
                System.out.print("Enter new course: ");
                s.setCourse(sc.nextLine());
                System.out.println("✅ Student updated successfully!");
                return;
            }
        }
        System.out.println("❌ Student not found!");
    }

    static void deleteStudent() {
        System.out.print("Enter Student ID to delete: ");
        int id = sc.nextInt();
        students.removeIf(s -> s.getId() == id);
        System.out.println("✅ Student deleted (if existed).");
    }
}
```

---

## ⚙️ OOP Concept Review

| Concept        | Implementation                                         |
| -------------- | ------------------------------------------------------ |
| Class & Object | `Student`, `Person`, `StudentManagementSystem`         |
| Constructor    | `Student(int id, String name, int age, String course)` |
| Encapsulation  | Private fields + Getters/Setters                       |
| Inheritance    | `Student extends Person`                               |
| Polymorphism   | `displayInfo()` overridden in `Student`                |
| Abstraction    | `Person` declared as abstract                          |
| Collection     | `ArrayList<Student>`                                   |

---

## 🏁 Bonus Challenge

Create an **Employee Management System**:

* Parent Class → `Employee`
* Child Classes → `Manager`, `Developer`
* Use Polymorphism for salary calculation
