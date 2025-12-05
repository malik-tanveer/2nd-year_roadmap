
---

# 🧠 **Day 5 – Inheritance & Polymorphism**

---

## **1️⃣ Inheritance – Concept**

**Definition:**
Inheritance is an OOP (Object-Oriented Programming) concept that allows a class (child/subclass) to **acquire the properties and methods** of another class (parent/superclass).
It helps achieve **code reusability** and **hierarchical relationships**.

**Syntax:**

```java
class Child extends Parent {
    // new methods or overridden ones
}
```

---

### **Why Use Inheritance?**

* To **reuse existing code** (no need to write everything again).
* To establish a **“is-a” relationship** (e.g., Dog *is-a* Animal).
* To make your program **structured and maintainable**.

---

### **Types of Inheritance in Java**

1. **Single Inheritance** – One parent, one child.
2. **Multilevel Inheritance** – A child acts as a parent for another class.
3. **Hierarchical Inheritance** – One parent, multiple children.
4. (**Multiple Inheritance**) – Not supported directly in classes (only via interfaces).

---

### **Example:**

```java
class Animal {
    void eat() {
        System.out.println("Animal is eating...");
    }
}

class Dog extends Animal {
    void bark() {
        System.out.println("Dog is barking...");
    }
}

public class InheritanceExample {
    public static void main(String[] args) {
        Dog d = new Dog();
        d.eat();   // Inherited from Animal
        d.bark();  // Own method
    }
}
```

🧠 *Explanation:*

* `Dog` extends `Animal`, so `Dog` inherits the `eat()` method.
* We can call both `eat()` (from parent) and `bark()` (from child).

---

## **2️⃣ Polymorphism – Concept**

**Definition:**
Polymorphism means **“many forms.”**
It allows one action (method call) to behave **differently** depending on the object that invokes it.

In Java, there are **two main types**:

---

### **1. Compile-time Polymorphism (Method Overloading)**

Achieved when **multiple methods have the same name** but **different parameters** (number or type).

**Example:**

```java
class MathOps {
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

public class OverloadingExample {
    public static void main(String[] args) {
        MathOps m = new MathOps();
        System.out.println(m.add(2, 3));
        System.out.println(m.add(2, 3, 4));
        System.out.println(m.add(2.5, 3.5));
    }
}
```

🧠 *Explanation:*
The compiler decides which `add()` method to call **based on the parameters** — that’s *compile-time* polymorphism.

---

### **2. Runtime Polymorphism (Method Overriding)**

Achieved when a **child class overrides** a method from its **parent class**, and **the method to call is decided at runtime**.

**Example:**

```java
class Animal {
    void sound() {
        System.out.println("Animal makes a sound");
    }
}

class Dog extends Animal {
    void sound() {
        System.out.println("Dog barks");
    }
}

public class OverridingExample {
    public static void main(String[] args) {
        Animal obj = new Dog(); // parent reference, child object
        obj.sound();  // Calls Dog’s version
    }
}
```

🧠 *Explanation:*
Here, `Animal` reference points to a `Dog` object, but at runtime, the **Dog class method** runs — this is *dynamic method dispatch* (runtime polymorphism).

---

## **3️⃣ Why Use Polymorphism?**

* Improves **flexibility and scalability** of code
* Allows **single interface** for multiple data types or actions
* Enables **runtime decision-making** based on object type

---

## **4️⃣ Real-life Example:**

Think of a **Remote Control** → one button (“Play”) can:

* Play video (if device = TV)
* Play song (if device = Music Player)
* Play game (if device = Console)

Same action → different behaviors = *Polymorphism.*

---

## ✅ **Summary**

| Concept      | Type        | Key Feature                | Example                                    |
| ------------ | ----------- | -------------------------- | ------------------------------------------ |
| Inheritance  | Reusability | Child class extends Parent | `class Dog extends Animal`                 |
| Polymorphism | Flexibility | One method, many forms     | `add()` overloading / `sound()` overriding |

---
